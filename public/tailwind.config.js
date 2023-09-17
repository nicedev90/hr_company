/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['../app/**/*'],
  theme: {
    screens: {
      sm: '480px',
      md: '768px',
      lg: '976px',
      xl: '1440px'
    },
    extend: {
      colors: {
        neutralLight: 'hsl(214,25%,95.5%)',
        neutral: 'hsl(214,25%,87.5%)',
        neutralDark: 'hsl(214,25%,75.5%)',
        primaryLight: 'hsl(226,56.2%,53.7%)',
        primary: 'hsl(226,56.2%,45.7%)',
        primaryDark: 'hsl(226,56.2%,33.7%)',
        ctaLight: 'hsl(200,99.2%,58.2%)',
        cta: 'hsl(200,99.2%,50.2%)',
        ctaDark: 'hsl(200,99.2%,38.2%)',
        dark: 'hsl(242,47.4%,34.3%)'
      }
    },
  },
  plugins: [],
}