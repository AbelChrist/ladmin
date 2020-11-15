const mix = require('laravel-mix');

const tailwindcss = require('tailwindcss')

mix.js('Resources/js/app.js', 'dist')
   .sass('resources/sass/app.scss', 'public/css')
      .options({
         processCssUrls: false,
         postCss: [ tailwindcss('./tailwind.config.js') ],
      })