<?php
namespace App\View\Helper;

use Cake\View\Helper;
use Cake\View\View;
use Cake\View\Helper\HtmlHelper;
use Cake\Core\Configure;
use Cake\Core\Exception\Exception;

/**
 * Bower helper
 */
class AppHtmlHelper extends HtmlHelper
{
    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_bowerPath = false;
    protected $_bowerRoot = false;
    protected $_jsBuffer = [];
    public function bower($path,  $options = [])
    {
        if (!$this->_bowerPath) {
            $this->_bowerPath = Configure::read('Bower.path');
        }
        if (!$this->_bowerRoot) {
            $this->_bowerRoot = Configure::read('Bower.root');
        }

        $path = $this->_bowerPath.$path;
        $root = str_replace(DS.DS, DS, $this->_bowerRoot.str_replace('/', DS, $path));
        // debug($path);
        // debug($root);
        // die;
        if ($path_info = @pathinfo($root)) {
            // debug($path_info);
            // die;
            switch (strtolower($path_info['extension'])) {
              case 'js':
                return $this->script($path, $options);
              break;
              case 'css':
                return $this->css($path, $options);
              break;
            default:
              if (file_exists($root.'.js')) {
                  return $this->script($path, $options);
              }
              if (file_exists($root.'.css')) {
                  return $this->css($path, $options);
              }
            break;
          }
        }

        throw new Exception('Bower file not found');
    }
    public function buffer($buffer, $jail=true)
    {
        if ($jail) {
            $buffer= "(function(){{$buffer}})();".PHP_EOL;
        }
        $this->_jsBuffer[]=$buffer;
    }
    public function writeBuffer($cached = true)
    {
        $file = md5(json_encode($this->request->params));
        $output = implode("\n\t", $this->_jsBuffer);
        if (!$output) {
            return;
        }
        if (!$cached||Configure::read('debug')) {
            return $this->_View->append('script', PHP_EOL."$(document).ready(function(){\n\t{$output}\n});");
        } else {
            if (!Configure::read('debug')||!file_exists(WWW_ROOT."buffer/$file.js")) {
                @file_put_contents(WWW_ROOT."vue/$file.js", $output);
            }
            return $this->Html->script("/buffer/$file.js", ['block'=>'js']);
        }
    }
}
