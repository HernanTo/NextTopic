const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();

mix.js('node_modules/froala-editor/js/froala_editor.pkgd.min.js', 'public/libs/froala/js');
mix.css('node_modules/froala-editor/css/froala_editor.pkgd.min.css','public/libs/froala/css');
