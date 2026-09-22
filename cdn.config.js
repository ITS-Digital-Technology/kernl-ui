const cloneDeep = require('lodash.clonedeep')
const defaultConfig = require('./defaultConfig')

const cdnConfig = cloneDeep(defaultConfig)

cdnConfig.plugins = [
  ...(cdnConfig.plugins || []),
  require('./plugins/buttons.js'),
  require('./plugins/columns.js'),
]

module.exports = cdnConfig
