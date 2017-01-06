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


class Router{
    
    /**
     * Stores registered routes
     */
    protected $routes = [];

    /**
     *current url
     */
    protected $url = '';
    
    /**
     * current action
     */
    protected $action = '';

    private const GET = 'get';

    private const POST = 'post';

    private const DELETE = 'delete';

    private const PATCH = 'patch';


    private static $routerInstance = null;

    private function __construct() {
        //
    }
    
    /**
     * Get singleton instance of router
     *
     * @return Router
     */
    public static function getInstance() : Router {
        return self::$routerInstance ?? new Router();
    }

    /**
     *  Get Request on url and action
     *
     * @param string url
     * @param string action
     */
    public function get($url, $action){
        $this->addRoute(GET, $url, $action);
    }   

    /**
     *  Post Request on url and action
     *
     * @param string url
     * @param string action
     */
    public function post($url, $action){
        $this->addRoute(POST, $url, $action);
    }   


    /**
     *  Delete Request on url and action
     *
     * @param string url
     * @param string action
     */
    public function delete($url, $action){
        $this->addRoute(DELETE, $url, $action);
    }   

    /**
     *  Patch Request on url and action
     *
     * @param string url
     * @param string action
     */
    public function patch($url, $action){
        $this->addRoute(PATCH, $url, $action);
    }

    /**
     * Adds newly registered route to routes array
     *
     * @param string $request_type
     * @param string url
     * @param string action
     */
    protected function addRoute($request_type='Get', $url, $action){
        $this->routes[] = ['request_type'=>$request_type, 'url'=>$url, 'action'=>$action];
    }

    /**
     * Retrieves action by url
     *
     * @param string key
     * @return String action
     */
    public function getActionByUrl($url) : string
    {
        foreach ($this->routes as $route)
        {
            if($route['url'] == $url)
            {
                $this->action = $route['action'];
            }
        }
        return $this->action;
    }
}