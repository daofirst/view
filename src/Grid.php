<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/11/11
 * Time: 22:56
 */

namespace DaofirstAdmin;

use DaofirstAdmin\Grid\Exporter;
use DaofirstAdmin\Grid\Filter;
use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Support\Collection;

class Grid
{
    /**
     * 表格数据model对象
     *
     * @var Eloquent
     */
    protected $model;

    /**
     * 主键字段 默认：id
     *
     * @var string
     */
    protected $keyName = 'id';

    /**
     * grid 生成器
     * @var \Closure
     */
    protected $builder;

    /**
     * 数据过滤
     * @var Filter
     */
    protected $filter;

    /**
     * 输出器
     * @var Exporter
     */
    protected $exporter;

    /**
     * grid 列集合
     * @var Collection
     */
    protected $columns;

    /**
     * 所有数据行的结合
     * @var Collection
     */
    protected $rows;

    public function __construct(Eloquent $model, \Closure $builder)
    {
        $this->keyName = $model->getKeyName();
        $this->model = $model;
        $this->columns = new Collection();
        $this->rows = new Collection();
        $this->builder = $builder;
        $this->setupFilter();
    }

    /**
     * 设置过滤器
     */
    protected function setupFilter(){
        $this->filter = new Filter($this->model);
    }

    /**
     * 设置输出器
     */
    protected function setupExporter()
    {
        $this->exporter = new Exporter($this);
    }
}