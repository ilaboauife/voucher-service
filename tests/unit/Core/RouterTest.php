<?php

use App\Core\Router;
use PHPUnit\Framework\TestCase;

class RouterTest extends TestCase{

	public const GET = 'get';

	public function setUp(){}

	public function tearDown(){}



	public function testGet(){
		$router = Router::getInstance();
		$router->get('/home/index', 'Action@Controller');
		$total_routes = count($router->routes);
		$this->assertEquals($router->routes[--$total_routes]['url'], '/home/index');
	}

	public function testPost(){
		$router = Router::getInstance();
		$router->post('/posts/index', 'Action@Controller');
		$total_routes = count($router->routes);
		$this->assertEquals($router->routes[--$total_routes]['url'], '/posts/index');
	}

	public function testPatch(){
		$router = Router::getInstance();
		$router->patch('/posts/1', 'Action@Controller');
		$total_routes = count($router->routes);
		$this->assertEquals($router->routes[--$total_routes]['url'], '/posts/1');
	}

	public function testDelete(){
		$router = Router::getInstance();
		$router->delete('/users/1', 'Action@Controller');
		$total_routes = count($router->routes);
		$this->assertEquals($router->routes[--$total_routes]['url'], '/users/1');
	}

	public function testAddRoute(){
		$router = Router::getInstance();
		$router->addRoute('/Route/x', 'Action@Controller', self::GET);
		$total_routes = count($router->routes);
		$this->assertEquals($router->routes[--$total_routes]['url'], '/Route/x');
	}

	public function testGetActionByUrl(){
		$router = Router::getInstance();
		$router->get('/new/route', 'ActionOne@Controller');
		$this->assertEquals($router->getActionByUrl('/new/route'), 'ActionOne@Controller');
	}
}