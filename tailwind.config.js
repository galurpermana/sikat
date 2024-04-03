module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        'hmsi': '#1c6fbb'
      },
      height: {
        'layar': '74vh'
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}