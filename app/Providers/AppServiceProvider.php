<?php

namespace App\Providers;

use App\Repositories\StudentRepository;
use App\Repositories\StudentRepositoryInterface;
use App\Services\StudentService;
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
        $this->app->bind(StudentRepositoryInterface::class, StudentRepository::class);

        $this->app->bind(StudentService::class, function($app)
        {
            return new StudentService(
                $app->make(StudentRepositoryInterface::class)
            );
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
