/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './dev/**/*.{php,html,js}',
    './node_modules/flowbite/**/*.js'
  ],
  theme: {
    extend: {
      fontFamily: {
        'unbounded': ['unbounded'],
        'montserrat': ['montserrat'],
        'paytone': ['paytone'],
        'sora': ['sora'],
        'outfit': ['outfit'],
        'alata': ['alata'],
        'titan': ['titan'],
        'pressstart': ['pressstart'],
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}
