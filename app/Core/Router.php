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
}