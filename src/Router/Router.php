<?php

namespace App\Router;

class Router {

	/**
	 * The Current URL
	 * @var string
	 */
	private $url;

	/**
	 * Array containing all the application routes
	 * @var array
	 */
	private $routes = [];

	/**
	 * Constructor
	 * @param string $url
	 */
	public function __construct($url)
	{
		$this->url = $url;
	}

	/**
	 * Add GET route to routes
	 * @param  [string] $path     
	 * @param  [closure] $callable 
	 * @return [type]
	 */
	public function get($path, $callable)
	{
		$route = new Route($path, $callable);
		$this->routes['GET'][] = $route;
	}

	/**
	 * Add POST route to routes
	 * @param  [string] $path     
	 * @param  [closure] $callable 
	 * @return [type]           
	 */
	public function post($path, $callable)
	{
		$route = new Route($path, $callable);
		$this->routes['POST'][] = $route;
	}

	/**
	 * Run the Route
	 * @return [type] [description]
	 */
	public function run()
	{
		if(!isset($this->routes[$_SERVER['REQUEST_METHOD']])) {
			throw new \RouterException('REQUEST_METHOD does not exist');
		}

		foreach ($this->routes[$_SERVER['REQUEST_METHOD']] as $route) {
			if($route->match($this->url)) {
				return $route->call();
			}
		}

		throw new RouterException('No matching routes');
	}
}