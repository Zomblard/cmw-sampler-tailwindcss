/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './dev/**/*.{php,html,js}',
    './node_modules/flowbite/**/*.js'
  ],
  theme: {
    extend: {
      fontFamily: {
        'angkor': ['angkor'],
        'ibmplexsans': ['ibmplexsans'],
        'kanit': ['kanit'],
        'lora': ['lora'],
        'madimione': ['madimione'],
        'ojuju': ['ojuju'],
        'opensans': ['opensans'],
        'playfairdisplay': ['playfairdisplay'],
        'robotocondensed': ['robotocondensed'],
        'robotomono': ['robotomono'],
        'robotoslab': ['robotoslab'],
        'rubik': ['rubik'],
        'ubuntu': ['ubuntu'],
        'roboto': ['roboto'],
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
