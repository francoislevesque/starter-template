<?php

namespace App\Router;

class Route {

	private $path;
	private $callable;
	private $matches;
	private $lang;

	/**
	 * Constructor
	 * @param [string] $path
	 * @param [closure] $callable
	 */
	public function __construct($path, $callable)
	{
		$path = "/:language" . $path;
		$this->path = trim($path, '/');
		$this->callable = $callable;
	}

	/**
	 * Check if current URL matches the route
	 * @param  [string] $url
	 * @return [boolean]      
	 */
	public function match($url)
	{
		$url = trim($url, '/');
        $path = preg_replace('#:([\w]+)#', '([^/]+)', $this->path);
        $regex = "#^$path$#i";
        if(!preg_match($regex, $url, $matches)){
            return false;
        }

        array_shift($matches);

        $this->matches = $matches;

		return true;
	}

	/**
	 * Call the Route Callable
	 * @return [closure]
	 */
	public function call()
	{
		return call_user_func_array($this->callable, $this->matches);
	}
}