<?php defined('SYSPATH') or die('No direct script access allowed.');

class Redbean_Autoloader {
	public static function autoload($class)
	{
		if ($class == 'Redbean' OR $class == 'R')
		{
			include_once Kohana::find_file('vendor', 'redbean/rb');
                        $rb = new Redbean();
		}
	}
}

spl_autoload_register(array('Redbean_Autoloader', 'autoload'));