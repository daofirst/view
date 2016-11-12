<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/12
 * Time: 9:14
 */

namespace DaofirstAdmin\Facades;


use Illuminate\Support\Facades\Facade;

class Admin extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \DaofirstAdmin\Admin\Admin::class;
    }

}