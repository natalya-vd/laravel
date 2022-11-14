<?php

namespace App\Providers;

use App\Queries\ResourcesQueryBuilder;
use App\Services\ParserService;
use App\Services\SocialService;
use App\Services\UploadFileService;
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
        $this->app->bind(ResourcesQueryBuilder::class);

        // Services
        $this->app->bind(Parser::class, ParserService::class);
        $this->app->bind(Social::class, SocialService::class);
        $this->app->bind(UploadFileService::class);
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
