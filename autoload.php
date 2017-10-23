<?php

spl_autoload_register( function($class){
	require "classes/" .$class . ".class.php";
/* standard php library for autoloading classes in your page */
});

$var = new testing2();
print_r($var);