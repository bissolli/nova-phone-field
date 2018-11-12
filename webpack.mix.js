let mix = require('laravel-mix')

mix.setPublicPath('dist')
    .js('resources/js/field.js', 'js')
    .sass('resources/sass/field.scss', 'css')
    .webpackConfig({
        module: {
            loaders: [
                {
                    test: /\.json$/,
                    loader: 'json-loader'
                }
            ]
        }
    })
