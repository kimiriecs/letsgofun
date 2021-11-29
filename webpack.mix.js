const mix = require('laravel-mix');

const path = require('path');

mix.webpackConfig({
  resolve: {
    alias: {
      '@': path.join(__dirname, 'resources/js')
    },
  },
});

mix.js("resources/js/app.js", "public/js")
    .sourceMaps()
    .vue()
    .sass("resources/sass/app.scss", "public/css")
    .postCss('resources/css/tailwind.css', 'public/css', [
        require("tailwindcss"),
    ]);
