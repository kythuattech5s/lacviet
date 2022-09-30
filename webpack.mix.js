let glob = require("glob");
glob.sync("./packages/**/webpack.mix.js").forEach((file) => require(file));

let tailwindcss = require("tailwindcss");
let mix = require("laravel-mix");

mix.postCss("./resources/css/app.css", "./public/css", [
    tailwindcss("./tailwind.config.js"),
]);
