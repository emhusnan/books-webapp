<?php

namespace App\Providers;

use App\Repositories\BookRepository;
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
        $this->app->bind(BookRepository::class, function ($app) {
            $request = $app->request;
            $bookRepository = new BookRepository();
            $bookRepository->setHttpRequest($request);
            return $bookRepository;
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
