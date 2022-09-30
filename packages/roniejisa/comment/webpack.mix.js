const publicPath = "public";
const namePath = "assets/comment";
const dist = publicPath + "/" + namePath;
let mix = require("laravel-mix");

const tailwindcss = require("tailwindcss");

mix.postCss(__dirname + "/resources/style/app.css", dist + "/style", [
    tailwindcss("./tailwind.config.js"),
]);
mix.copyDirectory(__dirname + "/resources/assets", dist);
mix.js(__dirname + "/resources/js/tinymce.js", dist + "/js");