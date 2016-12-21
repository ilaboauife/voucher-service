<?php
/**
 * HTTP Request Implementation
 *
 * Author: Perfect Makanju<damiperfect@gmail.com>
 * Date: 12/21/16
 * Time: 11:12 AM
 */

namespace App\Http;


use App\Contracts\IRequest;

class Request implements IRequest
{

    /**
     * Builds a requests from the global request parameters
     *
     */
    public static function parseRequest() : Request {
        return new Request();
    }
}