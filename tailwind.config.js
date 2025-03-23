module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    extend: {
      textShadow: {
        md: '2px 2px 4px rgba(0, 0, 0, 0.5)',
      },
    }
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
    require('tailwindcss-textshadow'),
  ]
}
