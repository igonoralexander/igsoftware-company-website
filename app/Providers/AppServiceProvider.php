<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;

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
        //

        Paginator::useBootstrap();

        Schema::defaultStringLength(200);

        View::composer('*', function ($view) {
            $view->with('metaDescription', $this->generateMetaDescription());
        });
    
    
    }

    protected function generateMetaDescription()
    {
        
        $currentRouteName = Route::currentRouteName();

        $page = str_replace('pages.', '', $currentRouteName);
        
        switch ($page) {
            case 'aboutus':
                $description = 'At IG Software Nig, we are committed to helping our clients achieve their online goals. We understand the challenges that come with launching and managing a successful website, therefore our mission is to provide our clients with the quality tools and resources needed to make their online dreams a reality, Getting your Desired Software Develop, IG Software Nig is a website development company that is dedicated to helping other business grow online and reach their desired goals through our comprehensive suite of services.';
                break;
            case 'services':
                $description = 'Unlock your business full potential with our professional website development services. IG Software Nig specializes in custom software development, empowering businesses to grow online and achieve their goals. Explore our comprehensive suite of services today!';
                break;
            case 'home':
                    $description = 'Empower your business to thrive online with IG Software Nig - a leading website development and design firm. Our comprehensive suite of services helps businesses achieve their goals, making us a trusted provider in custom software development and design solutions.';
                    break;

            case 'contact':
                    $description = 'Contact us for your custom website design, website development and software development needs. IG Software Nig is a leading website development company committed to boosting businesses online, enabling them to achieve their goals. Explore our services and grow your online presence today!"';
                    break;
                    
            case 'projects':
                $description = 'Discover our impressive portfolio of successful software development projects at IG Software Nig. As a dedicated website development company, we assist businesses in achieving their online growth and desired goals. Explore our comprehensive suite of services to unlock your digital potential today!';
                break;
            
            default:
                $description = 'Empower your business to thrive online with IG Software Nig - a leading website development and design firm. Our comprehensive suite of services helps businesses achieve their goals, making us a trusted provider in custom software development and design solutions.';
                break;
        }
        
        return $description;
    }
}
