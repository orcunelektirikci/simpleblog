<?php

namespace App\Providers;

use App\Category;
use App\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);

        $posts = Post::orderBy('id','desc')->paginate(6);
        View::share('posts', $posts);
        $categories = Category::all();
        View::share('categories', $categories);
        Carbon::setlocale('tr');


    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
