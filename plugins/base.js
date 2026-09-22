const plugin = require('tailwindcss/plugin')

module.exports = plugin(function ({ addBase, addComponents, theme }) {
  const baseStyles = {
    '[x-cloak], [v-cloak]': {
      display: 'none !important',
    },
    'body .buorg': {
      borderBottom: 'none',
      color: theme('colors.black'),
      backgroundColor: theme('colors.yellow.400'),
      fontSize: '1rem',
      'font-family': theme('fontFamily.sans'),
      boxShadow: theme('boxShadow.default'),
      animation: 'none',
    },
    'body .buorg-pad': {
      padding: '0.75rem 1rem',
      lineHeight: '1.5rem',
    },
    'body #buorgig, body #buorgul, body #buorgpermanent': {
      fontSize: '1rem',
      color: theme('colors.black'),
      background: 'none',
      boxShadow: 'none',
      padding: 0,
      borderRadius: 0,
      textDecoration: 'underline',
      transition: 'color 0.2s',
    },
    'body #buorgig:hover, body #buorgul:hover, body #buorgpermanent:hover': {
      color: theme('colors.yellow.900'),
    },
    'body .buorg-fadeout': {
      transition: 'visibility 0s 0.5s, opacity 0.5s ease-out 0.5s',
    },
    'body .buorg-icon': {
      width: '16px',
      height: '16px',
      top: '-0.05em',
      'margin-right': '0.5rem',
    },
  }

  addBase(baseStyles)

  // Container
  addComponents({
    '.container': {
      maxWidth: '1440px',
      marginLeft: 'auto',
      marginRight: 'auto',
      paddingLeft: '1rem',
      paddingRight: '1rem',
      '@media (min-width: 1024px)': {
        paddingLeft: '4rem',
        paddingRight: '4rem',
      },
    },
  })
})
