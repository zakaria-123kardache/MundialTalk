<?php
namespace app\Config;

use eftec\bladeone\BladeOne;

class BladeConfig {
    private static $blade;
    
    public static function init() {
        $viewsPath = __DIR__ . '/../../resources/views';
        $cachePath = __DIR__ . '/../../storage/cache';
        
        if (!file_exists($cachePath)) {
            mkdir($cachePath, 0755, true);
        }
        
        self::$blade = new BladeOne($viewsPath, $cachePath, BladeOne::MODE_AUTO);
        
        return self::$blade;
    }
    
    public static function getBlade() {
        if (!self::$blade) {
            self::init();
        }
        return self::$blade;
    }
}