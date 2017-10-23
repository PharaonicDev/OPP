<?php
/*---------[lec16 apstract class]-------

=>Class Abstraction
-cant Be Instantiated [cant be create object from]
-made for other classes to inhertt porperties & Methods Form
-can have amethod properties
-can have abstract method and non abstract methods
- abstract method {containes no body code }
- (abstract method)it build to force you to use it 



*/

abstract class MakeDevice{ // abstract class

	      public $ram;
          public function price(){
               echo "99$";
          }
          abstract public function Size($S);//Erorr
       
}
 /******new class******/ 
 class IphoneDevice extends MakeDevice{

  }
	



$ipone7 = new IphoneDevice();
$ipone7->price();
echo "<pre>" ;print_r($ipone7) ;echo "</pre>" ;



