/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                montserrat: ["Montserrat", "sans-serif"],
                playfair: ["playfair", "sans-serif"],
                custom:["Custom","sans-serif"],
            }
        },
    },
    plugins: [],
}
