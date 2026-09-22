const fs = require('fs')
const path = require('path')

const cssPath = path.resolve(__dirname, '../dist/css/index.css')
const css = fs.readFileSync(cssPath, 'utf8')

const classes = new Set()
const malformedClasses = new Set()
const ruleRe = /([^{}]+)\{/g
let ruleMatch

function isValidClassToken(token) {
  if (!/[A-Za-z]/.test(token)) {
    return false
  }

  if (/[-:]$/.test(token)) {
    return false
  }

  const openBrackets = (token.match(/\[/g) || []).length
  const closeBrackets = (token.match(/\]/g) || []).length

  if (openBrackets !== closeBrackets || /\[\]/.test(token)) {
    return false
  }

  return true
}

function decodeCssIdentifier(value) {
  return value
    .replace(/\\([0-9a-fA-F]{1,6})\s?/g, (_, hex) => String.fromCodePoint(parseInt(hex, 16)))
    .replace(/\\([^0-9a-fA-F])/g, '$1')
}

while ((ruleMatch = ruleRe.exec(css))) {
  const selectorText = ruleMatch[1]
  const classRe = /\.((?:\\[0-9a-fA-F]{1,6}\s?|\\.|[^\s>+~.#:[\](),])+)/g
  let classMatch

  while ((classMatch = classRe.exec(selectorText))) {
    const token = decodeCssIdentifier(classMatch[1])

    if (isValidClassToken(token)) {
      classes.add(token)
    } else if (/[A-Za-z]/.test(token)) {
      malformedClasses.add(token)
    }
  }
}

if (malformedClasses.size > 0) {
  throw new Error(`Malformed class tokens found: ${[...malformedClasses].sort().join(', ')}`)
}

const output = [...classes].sort().join('\n') + '\n'
fs.writeFileSync('./src/css/cdn-full.source.txt', output)

console.log(`Generated ${classes.size} class tokens (${output.length} bytes)`)