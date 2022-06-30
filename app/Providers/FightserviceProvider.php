<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class FightserviceProvider extends ServiceProvider
{
    public function boot()
    {
        View::composer(
                'fight.index', 'App\Http\Composers\FightComposer'  
        );
    }
}
