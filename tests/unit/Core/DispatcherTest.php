<?php
/**
 * Unit Test for the Dispatcher
 *
 * Author: Perfect Makanju<damiperfect@gmail.com>
 * Date: 12/21/16
 * Time: 11:17 AM
 */

namespace UnitTest\Core;


use App\Core\Dispatcher;
use UnitTest\BaseTestCase;

class DispatcherTest extends BaseTestCase
{

    public function test_GetDefault_Returns_Valid_Dispatcher(){
        $this->assertInstanceOf(Dispatcher::class, Dispatcher::getDefault());
    }
}