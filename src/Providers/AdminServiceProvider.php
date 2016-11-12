<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/11
 * Time: 23:37
 */

namespace DaofirstAdmin\Providers;


use DaofirstAdmin\Facades\Admin;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    public function boot()
    {

    }

    public function register()
    {
//        $this->app->booting(function(){
//            $loader = AliasLoader::getInstance();
//            $loader->alias('Admin', Admin::class);
//        });
    }
}