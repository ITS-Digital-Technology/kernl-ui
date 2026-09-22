const plugin = require('tailwindcss/plugin')

module.exports = plugin(function ({ addUtilities, addComponents, theme }) {
    const utilities = {
        '.col-none': {
            columnCount: 'initial',
        },
        '.col-2': {
            columnCount: '2',
        },
        '.col-3': {
            columnCount: '3',
        },
        '.col-4': {
            columnCount: '4',
        },
    }

    addUtilities(utilities)

    const components = {
        '.row': {
            margin: `-${theme('spacing.4')}`,
            display: 'flex',
            flexWrap: 'wrap',
        },
        '.row + .row': {
            marginTop: theme('spacing.4'),
        },
        '.column': {
            width: '100%',
            display: 'inline-block',
            padding: theme('spacing.4'),
        },
    }

    addComponents(components)
})
