<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\Event' => [
            'App\Listeners\EventListener',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }

    /**
     * "ctf0/package-changelog".
     */
    public static function postAutoloadDump(\Composer\Script\Event $event)
    {
        if (class_exists('ctf0\PackageChangeLog\Ops')) {
            return \ctf0\PackageChangeLog\Ops::postAutoloadDump($event);
        }
    }
}
