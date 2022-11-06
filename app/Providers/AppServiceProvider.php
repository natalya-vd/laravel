<?php

namespace App\Providers;

use App\Services\ParserService;
use App\Services\SocialService;
use App\Services\Contracts\Parser;
use App\Services\Contracts\Social;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        // QueryBuilder
        $this->app->bind(NewsQueryBuilder::class);
        $this->app->bind(CategoriesQueryBuilder::class);
        $this->app->bind(UsersQueryBuilder::class);

        // Services
        $this->app->bind(Parser::class, ParserService::class);
        $this->app->bind(Social::class, SocialService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();
    }
}
