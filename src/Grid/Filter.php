<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/11
 * Time: 23:11
 */

namespace DaofirstAdmin\Grid;


use Illuminate\Database\Eloquent\Model;

/**
 * Class Filter
 *
 * @method Filter     is($column, $label = '')
 * @method Filter     like($column, $label = '')
 * @method Filter     gt($column, $label = '')
 * @method Filter     lt($column, $label = '')
 * @method Filter     between($column, $label = '')
 *
 * @package DaofirstAdmin\Admin
 */
class Filter
{
    /**
     * 搜索数据模型类
     * @var Model
     */
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
        $this->is($this->model->getKeyName());
    }
}