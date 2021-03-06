module.exports = {
  mode: 'jit',
  purge: [
     './resources/**/*.blade.php',
     './resources/**/*.js',
     './resources/**/*.vue',
   ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      fontFamily: {

        body: ['Open Sans']

      }
    },
  },
  
  variants: {
    extend: {},
  },
  plugins: [
    require('tailwindcss-plugins/pagination'),
  ],
}
