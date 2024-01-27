<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;

//show database content in all pages
use App\Http\View\Composers\NavbarComposer;
use Illuminate\Support\Facades\View;
use App\Models\Contact;

// Fixing Bootstrap Pagination Style
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //generates actual images
        if (!$this->app->environment('production')) {
            $this->app->register('App\Providers\FakerServiceProvider');
        }
    }
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // link view to class
        // View::composer('admin.includes.navbar', NavbarComposer::class, 'compose');
        // // has one method, no need to write it
        // View::composer('admin.includes.navbar', NavbarComposer::class);

        //Or write the code here without extar files
        View::composer('admin.includes.navbar', function ($view) {
            $unread = Contact::where('flag', 0)->count();
            //session
            $view->with("unread", $unread);
        });

        // Fixing Bootstrap Pagination Style
        Paginator::useBootstrap();
    }
}
