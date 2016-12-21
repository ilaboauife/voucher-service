<?php
/**
 * Application Class. Handles Initialization and bootstrapping of Modules
 *
 * Author: Perfect Makanju<damiperfect@gmail.com>
 * Date: 12/9/16
 * Time: 11:02 PM
 */

namespace App\Core;


use App\Http\Request;

class Bootstrap
{
    /**
     * Initialize the Application Framework
     * @param Dispatcher|null $dispatcher
     * @return string
     */
    public static function init(?Dispatcher $dispatcher) : string
    {
        //parse requests
        $request = Request::parseRequest();

        //load Routes
        $router = Router::getInstance();

        //dispatch request using dispatcher
        $dispatcher->dispatch($request, $router);

        return 'Initializing';
    }
}