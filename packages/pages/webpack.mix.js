const publicPath = "public";
const namePath = "_grapes";

const path = require("path");
const dist = publicPath + "/" + namePath;
let mix = require("laravel-mix");

mix.js(path.join(__dirname, "resources/js/root.js"), path.join(dist, "js"));

const tailwindcss = require("tailwindcss");
mix.postCss(__dirname + "/resources/css/app.css", dist + "/css", [
    tailwindcss("./tailwind.config.js"),
]);
mix.copyDirectory(__dirname + "/resources/plugins", dist + "/plugins");
mix.copyDirectory(__dirname + "/resources/assets", dist + "/assets");
mix.webpackConfig({
    resolve: {
        fallback: {
            fs: false,
        },
    },
});
