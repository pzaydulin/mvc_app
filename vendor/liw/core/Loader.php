<?php

class Loader
{
	public function loadClass($class) // liw\core\Router
	{
		$arr = explode('\\', $class);
		$prefix = array_shift($arr);
		
		if($prefix == 'app') {
			$prefix_file = "../app/";
		} elseif ($prefix == 'liw') {
			$prefix_file = "../vendor/liw/";
		}
		
		$file = $prefix_file . implode("/", $arr) . ".php";
		
		if(file_exists($file)) {
			require_once $file;
		}
	}
	
}