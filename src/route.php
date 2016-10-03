<?php

namespace App;

class Route {

	private $path;
	private $callable;

	/**
	 * Constructor
	 * @param [string] $path
	 * @param [closure] $callable
	 */
	public function __construct($path, $callable)
	{
		$this->path = $path;
		$this->callable = $callable;
	}
}