<?php
/*
 Magic Methods
 -Method With Special Name Start with Double Underscore[__]

 (1)Constract:
 - Called when Object is created
 -can be inhertied

 (2)Destract:
 - Called when Object Is Destroyed

 (3)Call
 -Called when invoking function Not accessible Or not Found
 -Accept two parameters[$methodName, $Params]

 (4)__get:

  -it used for Rewrite the error when you wont print\echo
    undefined property
  - called when Getting A Property Not Accesible or Not Found
  -Accept One Parameter

(5)__SET:
-Called when Setting A value to a property Not Accessible or
  Not Found 
-Accept Two Parameters [$prop, $value]

*/
class Ipone {
	public $ram;
	public $Name;

	public function __construct($NA,$RA) {
		$this->Name =$NA;
		$this->ram  =$RA;
		echo "hellow" . $NA . " you have" . $RA;
	}
	public function __call($method, $Params){
		print_r($Params);
	}

	public function __get($prop){
      echo "the property ['. $prop .'] is not found";
	}

	public function __SET($prop, $value){
      echo "the property ['. $prop .'] is not found <br>";
      echo "and you cant Assign this value ['.$value . '] to it<br>";
	}

}

$Ipone7 = new Ipone("abubakr","25GB") ;//inject to call constrat inside opject with argumeter
$Ipone7->sayHellow("abubakr", "10wt");
echo $Ipone7->price;
echo "<pre>" ; print_r($Ipone7) ;echo "</pre>";

