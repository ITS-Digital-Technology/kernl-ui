const fs = require('fs')
const path = require('path')
const { execSync } = require('child_process')
const colors = require('../colors.js')

const seedPath = path.resolve(__dirname, '../src/css/cdn-source.seed.txt')
const sourcePath = path.resolve(__dirname, '../src/css/cdn-full.source.txt')
const outputPath = path.resolve(__dirname, '../src/css/cdn-candidates.source.txt')

const pluginCandidates = [
  'btn',
  'btn-sm',
  'btn-lg',
  'btn-xl',
  'col-none',
  'col-2',
  'col-3',
  'col-4',
  'column',
  'container',
  'row',
]

const responsiveVariants = ['sm', 'md', 'lg', 'xl', '2xl']
const interactionVariants = ['focus', 'hover', 'focus-within', 'group-hover']
const interactivePrefixes = {
  focus: new Set([
    'bg',
    'border',
    'from',
    'line',
    'no',
    'not',
    'opacity',
    'outline',
    'placeholder',
    'ring',
    'rotate',
    'scale',
    'shadow',
    'skew',
    'sr',
    'text',
    'to',
    'translate',
    'underline',
    'via',
    'z',
  ]),
  hover: new Set([
    'bg',
    'border',
    'from',
    'line',
    'no',
    'opacity',
    'rotate',
    'scale',
    'shadow',
    'skew',
    'text',
    'to',
    'translate',
    'underline',
    'via',
  ]),
  'focus-within': new Set([
    'bg',
    'border',
    'line',
    'no',
    'not',
    'opacity',
    'outline',
    'ring',
    'shadow',
    'sr',
    'text',
    'underline',
    'z',
  ]),
  'group-hover': new Set([
    'bg',
    'border',
    'line',
    'no',
    'opacity',
    'shadow',
    'text',
    'underline',
  ]),
}
const colorNames = Object.keys(colors).sort((a, b) => b.length - a.length)

const opacityValues = new Set([
  '0',
  '5',
  '10',
  '15',
  '20',
  '25',
  '30',
  '35',
  '40',
  '45',
  '50',
  '55',
  '60',
  '65',
  '70',
  '75',
  '80',
  '85',
  '90',
  '95',
  '100',
])

const colorUtilityPrefixes = new Set([
  'accent',
  'bg',
  'border',
  'caret',
  'decoration',
  'divide',
  'fill',
  'from',
  'outline',
  'placeholder',
  'ring',
  'shadow',
  'stroke',
  'text',
  'to',
  'via',
])

function getOpacityScale() {
  const rawScale = process.env.CDN_OPACITY_SCALE || ''

  if (!rawScale) {
    return new Set()
  }

  if (rawScale === 'all') {
    return opacityValues
  }

  return new Set(
    rawScale
      .split(',')
      .map((value) => value.trim())
      .filter((value) => opacityValues.has(value))
  )
}

function shouldKeepToken(token, allowedOpacityValues) {
  const opacityMatch = token.match(/\/(\d{1,3})$/)

  if (!opacityMatch) {
    return true
  }

  const prefix = token.replace(/^.*:/, '').split('-')[0]
  const opacity = opacityMatch[1]

  if (!colorUtilityPrefixes.has(prefix) || !opacityValues.has(opacity)) {
    return true
  }

  return allowedOpacityValues.has(opacity)
}

function getBaseToken(token) {
  return token.split(':').at(-1)
}

function getPrefix(token) {
  return getBaseToken(token).replace(/^-/, '').split(/[-:/[]/)[0]
}

function getColorName(token, prefix) {
  const baseToken = getBaseToken(token)
  const colorToken = baseToken.replace(new RegExp(`^${prefix}-`), '')

  return colorNames.find(
    (colorName) => colorToken === colorName || colorToken.startsWith(`${colorName}-`) || colorToken.startsWith(`${colorName}/`)
  )
}

function isColorToken(token, prefix) {
  return Boolean(getColorName(token, prefix))
}

function isV2InteractiveToken(token, variant) {
  const prefix = getPrefix(token)

  if (!interactivePrefixes[variant].has(prefix)) {
    return false
  }

  if (['bg', 'from', 'placeholder', 'text', 'to', 'via'].includes(prefix)) {
    return isColorToken(token, prefix)
  }

  if (prefix === 'border') {
    return isColorToken(token, prefix) || /^(border|border-0|border-2|border-3|border-4|border-8)$/.test(getBaseToken(token))
  }

  if (prefix === 'shadow') {
    return /^(shadow|shadow-2xs|shadow-xs|shadow-sm|shadow-md|shadow-lg|shadow-xl|shadow-2xl|shadow-inner|shadow-none)$/.test(
      getBaseToken(token)
    )
  }

  return true
}

function extractClassTokens(css) {
  const classes = new Set()
  const ruleRe = /([^{}]+)\{/g
  let ruleMatch

  while ((ruleMatch = ruleRe.exec(css))) {
    const selectorText = ruleMatch[1]
    const classRe = /\.((?:\\[0-9a-fA-F]{1,6}\s?|\\.|[^\s>+~.#:[\](),])+)/g
    let classMatch

    while ((classMatch = classRe.exec(selectorText))) {
      let token = classMatch[1]
      token = token
        .replace(/\\:/g, ':')
        .replace(/\\\//g, '/')
        .replace(/\\\./g, '.')
        .replace(/\\\[/g, '[')
        .replace(/\\\]/g, ']')

      if (/[A-Za-z]/.test(token)) {
        classes.add(token)
      }
    }
  }

  return [...classes].sort().join('\n') + '\n'
}

function readSeedSource() {
  if (fs.existsSync(seedPath) && process.env.CDN_REFRESH_SEED !== '1') {
    return fs.readFileSync(seedPath, 'utf8')
  }

  try {
    const seed = execSync('git show HEAD:src/css/cdn-full.source.txt 2>/dev/null', {
      encoding: 'utf8',
      maxBuffer: 30 * 1024 * 1024,
    })

    fs.writeFileSync(seedPath, seed)
    return seed
  } catch (error) {
    try {
      const css = execSync('git show HEAD:dist/css/index.css 2>/dev/null', {
        encoding: 'utf8',
        maxBuffer: 30 * 1024 * 1024,
      })
      const seed = extractClassTokens(css)

      fs.writeFileSync(seedPath, seed)
      return seed
    } catch (cssError) {
      // Fall back to the current generated list for fresh, non-git checkouts.
    }

    if (!fs.existsSync(sourcePath)) {
      throw new Error(`Missing CDN source seed: ${seedPath}`)
    }

    const seed = fs.readFileSync(sourcePath, 'utf8')
    fs.writeFileSync(seedPath, seed)
    return seed
  }
}

function addV2StyleVariants(candidates) {
  const baseCandidates = [...candidates]

  for (const token of baseCandidates) {
    for (const screen of responsiveVariants) {
      candidates.add(`${screen}:${token}`)
    }

    for (const variant of interactionVariants) {
      if (!isV2InteractiveToken(token, variant)) {
        continue
      }

      candidates.add(`${variant}:${token}`)

      for (const screen of responsiveVariants) {
        candidates.add(`${screen}:${variant}:${token}`)
      }
    }
  }
}

const allowedOpacityValues = getOpacityScale()
const source = readSeedSource()
const candidates = new Set([
  ...source
    .split(/\r?\n/)
    .map((token) => token.trim())
    .filter(Boolean)
    .filter((token) => shouldKeepToken(token, allowedOpacityValues)),
  ...pluginCandidates,
])

addV2StyleVariants(candidates)

const output = [...candidates].sort().join('\n') + '\n'
fs.writeFileSync(outputPath, output)

console.log(
  `Generated ${candidates.size} CDN candidates (${output.length} bytes, opacity scale: ${
    allowedOpacityValues.size ? [...allowedOpacityValues].join(',') : 'none'
  })`
)
