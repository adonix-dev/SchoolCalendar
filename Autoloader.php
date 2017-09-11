<?php

include('core/config/config.php');

class Autoloader{

	static function register(){

		spl_autoload_register(array(__CLASS__, 'autoload'));

	}

	static function autoload($class_name){

		if ($class_name == 'Keys') {

			require 'core/config/' . $class_name . '.php';

		}else{

			require 'core/classes/' . $class_name . '.php';

		}

		

	}

}

?>