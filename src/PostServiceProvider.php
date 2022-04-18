<?php

namespace ShakibZaman\Post;
class PostServiceProvider extends \Illuminate\Support\ServiceProvider{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views','Post');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->publishes([
            __DIR__.'/../database/seeds' => database_path('seeds'),
        ], 'post-seeds');

    }
    public function register()
    {

    }

}
