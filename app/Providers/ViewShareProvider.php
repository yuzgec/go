<?php

namespace App\Providers;

use App\Models\Setting;
use Carbon\Carbon;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewShareProvider extends ServiceProvider
{

    public function register(): void
    {
        //
    }

    public function boot(): void
    {

        Paginator::useBootstrap();
        Carbon::setLocale(config('app.locale'));
        URL::forceScheme('https');
        config()->set('settings', Setting::pluck('value','item')->all());

        View::share([ 'deneme' => 'deneme']);
    }
}
