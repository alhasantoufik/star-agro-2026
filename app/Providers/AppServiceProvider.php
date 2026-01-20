<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\ImageGallery;
use App\Models\WebsiteSetting;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Gloudemans\Shoppingcart\Facades\Cart;

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
        // Fetch website settings once
        $setting = WebsiteSetting::first();

        if ($setting) {
            // Dynamically set app.name
            if ($setting->website_title) {
                config(['app.name' => $setting->website_title]);
            }

            // Optional: Also store in config for later use
            config([
                'app.website_logo' => $setting->website_logo,
                'app.website_title' => $setting->website_title,
            ]);

            // Share globally to all blade views
            View::share('website_setting', $setting);
        }
        $categories = Category::with('products')
            ->where('category_slug', '!=', 'default')
            ->select('id', 'category_name', 'image', 'category_slug')
            ->get();

        // Share $categories with all views
        View::share('categories', $categories);


        View::composer('website.layouts.inc.footer', function ($view) {

            $images = ImageGallery::where('is_active', 1)
                ->latest()
                ->limit(6)
                ->get(['image']);

            $view->with('images', $images);
        });

        // Header এর জন্য website settings
        View::composer('website.layouts.inc.header', function ($view) {
            $website_setting = WebsiteSetting::first(); // ধরে নিই একটিমাত্র row আছে
            $view->with('website_setting', $website_setting);
        });

        // Set Bootstrap for Pagination
        Paginator::useBootstrap();

        // Enable Toastr with Vite
        Toastr::useVite();
    }
}
