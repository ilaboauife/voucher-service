<?php
/**
 * This class handles registering of routes to Callbacks or method signatures.
 * The routes can either be POST, GET or PUT.
 *
 * Author: Perfect Makanju<damiperfect@gmail.com>
 * Date: 12/12/16
 * Time: 11:53 AM
 */

namespace App\Core;


class Router
{
    protected $controller = 'home';

    protected $action = 'index';

    protected $params = [];

    private static $routerInstance = null;


    public function __construct() {
        $this->parseUrl();
    }


    /**
     * Get singleton instance of router
     *
     * @return Router
     */
    public static function getInstance() : Router {
        return $this->$routerInstance ?? new Router();
    }

    public function parseUrl($url = ''){
        $url = $_SERVER['REQUEST_URI'];
        if(isset($url))
        {
            $url = explode('/', filter_var(rtrim($_SERVER['REQUEST_URI'], '/'), FILTER_SANITIZE_URL));
            unset($url[0]);
            unset($url[1]);
            $url = array_values($url);

            //Get controller
            if(file_exists(APP_PATH.DS.'controllers'.DS.$url[0].'.php'))
            {
                $this->controller = $url[0];
                unset($url[0]);
            }
            require_once APP_PATH.DS.'controllers'.DS.$this->controller.'.php';
            $this->controller = new $this->controller;

            //Get Action
            if(method_exists($this->controller, $url[1]))
            {
                $this->action = isset($url[1])? $url[1]: null;
                unset($url[1]);
            }
            array_values($url);

            //Get Parameters
            $this->params = $url? $url: null;

            //implement contoller action
            call_user_func_array([$this->controller, $this->action], $this->params);
        }
    }

    public function getController(){
        return $this->controller;
    }

    public function getAction(){
        return $this->action;
    }

    public function getParams(){
        return $this->params;
    }
}

$router = new Router;