const mix = require('laravel-mix');

if (!mix.inProduction()) {
    mix.webpackConfig({
        devtool: 'inline-source-map',
    });

    mix.sourceMaps();
}

mix.js('resources/js/app.js', 'public/js')
    .extract([
        'jquery',
        'bootstrap',
        'node-waves',
        'waypoints/lib/jquery.waypoints',
        'quill',
        'sortablejs',
    ]);

mix.sass('resources/scss/bootstrap.scss', 'public/css')
    .sass('resources/scss/plugins.scss', 'public/css')
    .sass('resources/scss/app.scss', 'public/css');
