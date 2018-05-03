<?php

namespace App\Providers;



use App\DAL\User\EloquentUser;
use App\DAL\User\UserRepository;
use Illuminate\Support\ServiceProvider;

class DALServiceProvider extends ServiceProvider
{

    public function register()
    {
        $toBind = [
            UserRepository::class => EloquentUser::class,
        ];

        foreach ($toBind as $interface => $implementation) {
            $this->app->bind($interface, $implementation);
        }
    }

}