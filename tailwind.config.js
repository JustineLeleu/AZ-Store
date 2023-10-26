/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./**/*.{html,js,php}'],
  theme: {
    extend: {
      fontFamily: {
        btn: ['btn', 'sans'],
        descFont: ['descFont', 'sans'],
        NikeOutline: ['Nike-Outline', 'sans'],
        titleFont: ['titleFont', 'sans'],
      },
    },
  },  plugins: [],
}

