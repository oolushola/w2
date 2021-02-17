<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\SiteApplication;
use App\ChildLinks;
use App\CompanyProfile;
use App\Testimonial;

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
        view()->composer('*', function($view) {
            $siteApplications = SiteApplication::SELECT('id', 'application_name', 'url_path', 'has_children')->GET();
            $childLinks = ChildLinks::SELECT('site_application_id', 'application_name', 'url_path')->GET();
            $companyProfile = CompanyProfile::GET()->FIRST();
            $testimonials = Testimonial::GET();
            $view->with([
                'menuItems' => $siteApplications,
                'childLinks' => $childLinks,
                'companyProfile' => $companyProfile,
                'testimonials' => $testimonials
            ]);
        });
    }
}
