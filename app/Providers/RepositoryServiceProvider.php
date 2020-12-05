<?php

namespace App\Providers;

use App\Repository\Course\CourseRepositoryInterface;
use App\Repository\Course\CourseRepository;
use App\Repository\Category\CategoryRepositoryInterface;
use App\Repository\Category\CategoryRepository;
use App\Repository\Seo\SeoRepositoryInterface;
use App\Repository\Seo\SeoRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(){
        $this->app->bind(CourseRepositoryInterface::class, CourseRepository::class);
        $this->app->bind(SeoRepositoryInterface::class, SeoRepository::class);
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
    }
}
