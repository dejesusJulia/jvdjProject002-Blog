<?php

namespace app\core;

class Controller{
    public string $layout = 'main';

    public static function render($view, $params = []){
        return Application::$app->router->renderView($view, $params);
    }

    public function setlayout($layout){
        $this->layout = $layout;
    }
}