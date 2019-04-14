const mix = require('laravel-mix');

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

mix
	.disableNotifications()
	
	// .js('resources/js/app.js', 'public/js')
   	.sass('resources/sass/global.scss', 'public/css')
   	.extract([
	   	'vue',
   		'axios'
   	]);

if(mix.inProduction()){
	mix.version()
}