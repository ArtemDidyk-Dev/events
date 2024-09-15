<?php

declare(strict_types=1);

namespace App\Providers;

use App\Repositories\BaseRepository;
use App\Repositories\EventRepository;
use App\Repositories\UserRepository;
use App\Repositories\VenueRepository;
use App\Services\EventService;
use App\Services\EventServiceInterface;
use App\Services\UserService;
use App\Services\UserServiceInterface;
use App\Services\VenueService;
use App\Services\VenueServiceInterface;
use App\Services\WeatherService;
use App\Services\WeatherServiceInterface;
use Illuminate\Pagination\Paginator;
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
    public function boot(): void
    {
        $this->app->bind(BaseRepository::class, UserRepository::class);
        $this->app->bind(BaseRepository::class, EventRepository::class);
        $this->app->bind(BaseRepository::class, VenueRepository::class);
        $this->app->bind(EventServiceInterface::class, EventService::class);
        $this->app->bind(UserServiceInterface::class, UserService::class);
        $this->app->bind(VenueServiceInterface::class, VenueService::class);
        $this->app->bind(WeatherServiceInterface::class, WeatherService::class);
        Paginator::defaultView('vendor.pagination.bootstrap-4');
    }
}
