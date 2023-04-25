/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            backgroundImage: {
                landing: "url('/resources/img/undraw_scientist_ft0o.svg')",
            },
        },
    },
    plugins: [],
};
