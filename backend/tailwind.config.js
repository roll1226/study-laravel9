const colors = require("tailwindcss/colors");
delete colors["lightBlue"];
const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.ts",
        "./resources/**/*.vue",
    ],
    darkMode: "media",
    theme: {
        extend: {
            ...defaultTheme.extend,
        },
        colors: {
            ...colors,
        },
    },
    plugins: [],
};
