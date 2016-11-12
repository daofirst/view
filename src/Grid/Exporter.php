<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/11
 * Time: 23:31
 */

namespace DaofirstAdmin\Grid;


use DaofirstAdmin\Grid;

class Exporter
{
    protected $grid;

    public function __construct(Grid $grid)
    {
        $this->grid = $grid;
    }
}