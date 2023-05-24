<?php

namespace App\Providers;

use App\Http\Resources\ResourcesResponseSubscribtions;
use App\Models\User;
use App\Observers\ObserverSubcription;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        JsonResource::withoutWrapping();
        ResourcesResponseSubscribtions::withoutWrapping();
        User::observe(ObserverSubcription::class);
    }
}
