const { spawnSync } = require('child_process')

function run(command, args) {
  const result = spawnSync(command, args, { stdio: 'inherit' })

  if (result.status !== 0) {
    process.exit(result.status || 1)
  }
}

console.log('Building kernl(ui) CSS with TailwindCSS v4 CLI...')

run(process.execPath, ['scripts/generate-cdn-candidates.js'])

run(
  process.platform === 'win32' ? 'npx.cmd' : 'npx',
  [
    'tailwindcss',
    '-c',
    './cdn.config.js',
    '-i',
    './src/css/index.css',
    '-o',
    './dist/css/index.css',
    '--minify',
  ],
)

console.log('kernl(ui) CSS built successfully!')
