const mix = require('laravel-mix');

mix.postCss('resources/css/main.css', 'public/css')
mix.scripts([
  'resources/js/jquery-3.3.1.min.js',
  'resources/js/popper.min.js',
  'resources/js/bootstrap.min.js',
  'resources/js/main.js',
  'resources/js/plugins/pace.min.js',
  'resources/js/plugins/chart.js',
  'js/plugins/jquery.dataTables.min.js',
  'js/plugins/bootstrap-notify.min.js'
  ], 'public/js/admin.js');
mix.scripts([
  'js/jquery-3.3.1.min.js',
  'js/popper.min.js',
  'js/bootstrap.min.js',
  'js/main.js',
  'js/plugins/pace.min.js',
  'js/plugins/jquery.dataTables.min.js',
  'js/plugins/dataTables.bootstrap.min.js',
  'js/plugins/bootstrap-notify.min.js'
  ],'public/js/dataTables.js');

if(mix.inProduction())
{
	mix.version();
}