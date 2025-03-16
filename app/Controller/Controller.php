<?php
namespace app\Controller;

use app\Config\BladeConfig;

class Controller {
    protected $viewPath;
    protected $model;

    public function __construct() {
        $this->viewPath = __DIR__."/../../resources/views";
        $modelName = str_replace('Controller', '', static::class);
        $modelName = strtolower($modelName);
    }

    protected function render($view, $data = []) {
        $blade = BladeConfig::getBlade();
        echo $blade->run($view, $data); 
    }
}