<?php
/**
 * Unit Test for the Bootstrap class
 *
 * Author: Perfect Makanju<damiperfect@gmail.com>
 * Date: 12/9/16
 * Time: 11:13 PM
 */

namespace UnitTest\Core;

use \Mockery as m;

use App\Core\{Bootstrap, Dispatcher};
use UnitTest\BaseTestCase;

class BootstrapTest extends BaseTestCase
{

    protected function tearDown() {
        \Mockery::close();
    }

    public function test_Init_ReturnsCorrectOutput() {
        $dispatcher = m::mock(Dispatcher::class);
        $dispatcher->shouldReceive('dispatch')->once();

        $this->assertEquals('Initializing', Bootstrap::init($dispatcher));
    }
}