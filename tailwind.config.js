const { colors } = require('tailwindcss/defaultTheme');

module.exports = {
  purge: [],
  theme: {
    colors: {
      primaryDark: '#d4412f',
      primary: '#fb503b',
      secondary: '#fb6e3b',
      avatar: '#fb503b',
      accent: colors.gray[800],
      danger: colors.red[600],
      warning: colors.orange[600],
      ...colors
    }
  },
  variants: {},
  plugins: [],
}
