<?php

namespace App\Providers;

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
    public function boot()
	{
		\App\Models\User::observe(\App\Observers\UserObserver::class);
		\App\Models\Reply::observe(\App\Observers\ReplyObserver::class);
		\App\Models\Rely::observe(\App\Observers\RelyObserver::class);
		\App\Models\Project::observe(\App\Observers\ProjectObserver::class);
		\App\Models\Topic::observe(\App\Observers\TopicObserver::class);

        \Illuminate\Pagination\Paginator::useBootstrap();

        //
    }
}
