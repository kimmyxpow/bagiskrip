/** @type {import('tailwindcss').Config} */

const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    darkMode: "class",
    theme: {
        extend: {
            container: {
                center: true,
                padding: "2rem",
            },
            fontFamily: {
                sans: ["Work Sans", ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [],
};
