/** @type {import('tailwindcss').Config} */
// export default {
//   content: [],
//
// }
module.exports = {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './vendor/filament/**/*.blade.php',
    ],
    theme: {
        extend: {},
    },
    plugins: [],
    // ... rest of the config
}

