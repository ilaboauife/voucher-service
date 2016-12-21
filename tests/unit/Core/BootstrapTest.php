<?php
/**
 * Unit Test for the Bootstrap class
 *
 * Author: Perfect Makanju<damiperfect@gmail.com>
 * Date: 12/9/16
 * Time: 11:13 PM
 */

namespace UnitTest\Core;


use App\Core\Bootstrap;
use App\Core\Dispatcher;
use UnitTest\BaseTestCase;

class BootstrapTest extends BaseTestCase
{
    public function test_Init_ReturnsCorrectOutput(){
        $this->assertEquals('Initializing', Bootstrap::init());
    }
}