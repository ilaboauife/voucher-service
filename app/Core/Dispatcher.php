<?php
/**
 * Handles Dispatching of IRequests to the relevant Callbacks
 *
 * Author: Perfect Makanju<damiperfect@gmail.com>
 * Date: 12/21/16
 * Time: 11:00 AM
 */

namespace App\Core;


use App\Contracts\IRequest;

class Dispatcher
{

    /**
     * Get Default Dispatcher.
     *
     * @return Dispatcher
     */
    public static function getDefault() : Dispatcher {
        return new Dispatcher();
    }

    /**
     * Dispatches the request to the $router callback.
     *
     * @param IRequest $request
     * @param Router $router
     */
    public function dispatch(IRequest $request, Router $router) {

    }
}