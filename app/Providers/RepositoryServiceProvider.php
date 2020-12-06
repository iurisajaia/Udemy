<?php

namespace App\Providers;

use App\Repository\Course\CourseRepositoryInterface;
use App\Repository\Course\CourseRepository;
use App\Repository\Category\CategoryRepositoryInterface;
use App\Repository\Category\CategoryRepository;
use App\Repository\Seo\SeoRepositoryInterface;
use App\Repository\Seo\SeoRepository;
use App\Repository\User\UserRepositoryInterface;
use App\Repository\User\UserRepository;
use App\Repository\Template\TemplateRepositoryInterface;
use App\Repository\Template\TemplateRepository;
use App\Repository\Message\MessageRepositoryInterface;
use App\Repository\Message\MessageRepository;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider{
    public function register(){
        $this->app->bind(CourseRepositoryInterface::class, CourseRepository::class);
        $this->app->bind(SeoRepositoryInterface::class, SeoRepository::class);
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(TemplateRepositoryInterface::class, TemplateRepository::class);
        $this->app->bind(MessageRepositoryInterface::class, MessageRepository::class);
    }
}
