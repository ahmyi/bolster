<?php
namespace App\View\Helper;

use Cake\View\Helper;
use Cake\View\View;
use Cake\Core\Exception\Exception;
use Cake\Core\Configure;

/**
 * Vue helper
 */
class VueHelper extends Helper
{
    public $helpers = ["Url",'Html'=>['className'=>'AppHtml']];
    protected $_buffer = [
        // 'object'=>"",
         "el"=> "body",
         "data"=>[],
         'computed'=>[]
    ];
    public function el($el)
    {
        $this->_buffer['el']= $el;
    }
    public function html($model, $raw = false, $one_time = null)
    {
        if (!empty($one_time)) {
            $one_time = "*";
        }
        return (!$raw)?"{{{$one_time} $model }}":"{{{{$one_time} $model }}}";
    }
    public function data($datas, $overwrite = false)
    {
        foreach ($datas as $key=>$data) {
            if (is_string($key)) {
                if ($overwrite||!isset($this->_buffer['data'][$key])) {
                    $this->_buffer['data'][$key] = $data;
                } else {
                    throw new Exception("Data key already exists. Overwrite?");
                }
            } else {
                throw new Exception("Invalid key for data");
            }
        }
    }
    public function computed($alias, $fn)
    {
        if (!is_string($alias)||!is_string($fn)) {
            throw new Exception("Invalid alias / function for computed");
        } else {
            $this->_buffer['computed'][$alias] = $fn;
        }
    }

    public function writeBuffer($cached = true)
    {
        $file = md5(json_encode($this->request->params));
        $output = sprintf("window.AppModel = new Vue(%s);", json_encode($this->_buffer));
        $this->Html->bower("/vue/dist/vue.min.js", ['block'=>'js']);
        if (!$cached||Configure::read('debug')) {
            return $this->_View->append('script', $output);
        } else {
            if (!Configure::read('debug')||!file_exists(WWW_ROOT."vue/$file.js")) {
                @file_put_contents(WWW_ROOT."vue/$file.js", $output);
            }
            return $this->Html->script("/vue/$file.js", ['block'=>'js']);
        }
    }
}
