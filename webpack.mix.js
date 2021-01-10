const mix = require('laravel-mix')
const webpack = require('webpack')

mix.webpackConfig({
    plugins: [
        new webpack.ProvidePlugin({
            process : 'process/browser',
            Buffer  : ['buffer', 'Buffer']
        })
    ]
})

let pub = 'public/assets/vendor'
let res = 'resources/assets'
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
mix.js(res + '/js/app.js', 'public/js').vue()
// .sass('resources/assets/sass/app.scss', 'public/css')

// MediaManager
mix.sass(res + '/vendor/MediaManager/sass/manager.scss', pub + '/MediaManager/style.css')
    .copyDirectory(res + '/vendor/MediaManager/dist', pub + '/MediaManager')
