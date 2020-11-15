const mix = require('laravel-mix');

const tailwindcss = require('tailwindcss')

mix.js('Resources/js/app.js', 'dist')
   .sass('resources/sass/app.scss', 'dist')
      .options({
         processCssUrls: false,
         postCss: [ tailwindcss('./tailwind.config.js') ],
      })