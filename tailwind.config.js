/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./public/**/*.{html,js}'],
  theme: {
    container: {
      center: true,
      padding: '16px',
    },
    extend: {
      colors:{
        birdong: '#172554',
      },
      screens: {
        '2xl': '1230px',
      }
    },
  },
  plugins: [],
}

