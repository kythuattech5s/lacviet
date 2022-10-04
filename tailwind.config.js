/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./packages/pages/**/*.blade.php",
        "./packages/pages/**/*.js",
        "./packages/roniejisa/comment/**/*.js",
        "./packages/roniejisa/comment/**/*.blade.php",
        "./resources/**/*.blade.php",
        "./app/Helpers/Support.php",
    ],
    theme: {
        extend: {
            fontFamily: {
                Gilroy: ['"Gilroy"'],
                Every: ['"Every"'],
                Pleasent: ['"Pleasent"'],
            },
            container: {
                center: true,
            },
        },
    },
    plugins: [],
};
