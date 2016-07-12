<?php
namespace App\View\Helper;

use Cake\View\Helper;
use Cake\View\View;

/**
 * DataTables helper
 */
class DataTablesHelper extends Helper
{
    public $helpers = ["Url",'Html'=>['className'=>'AppHtml']];

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    public function writeBuffer($element = ".datatable")
    {
        $this->Html->buffer("$('$element').DataTable();");
    }
}
