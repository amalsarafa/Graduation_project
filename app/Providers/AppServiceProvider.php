<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

    use App\Models\Task;
    
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    
    public function boot()
    {
        View::composer('admin.*', function ($view) {
            $tasks = Task::orderBy('created_at', 'desc')->get();
            $view->with('tasks', $tasks);
        });
    }
}
