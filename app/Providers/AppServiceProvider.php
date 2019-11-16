<?php
namespace App\Providers;
namespace App\Providers;
use Illuminate\Routing\UrlGenerator;
// use App\Project;
// use App\Task;
// use App\Observers\ProjectObserver;
// use App\Observers\TaskObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
 /**
  * Register any application services.
  *
  * @return void
  */

 public function register()
 {
   //
 }

 /**
  * Bootstrap any application services.
  *
  * @return void
  */
 public function boot(UrlGenerator $url)
 {
   if (env('APP_ENV') !== 'local') {
     $url->forceScheme('https');
   }
 }
}
