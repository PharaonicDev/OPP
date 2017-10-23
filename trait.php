<?php
/*
Trait =>5.4
(1)A Mechanism For code Reuse In single Inheritance Languages such as php

(2)problem with Extending class, Is That U can only extend one.  Thise is a lettel  limiting

(3)With Traits Its Possible for php Classes To inhertit Methods & proberties

(4) you cannot Extend Or Implements.

(5)You can not Instantiate.
(6)it supporting Class Not Replacing it .
(7) Have A priority Over class
*/
/*
Trait brain {
	public function B(){
		echo "Human has brain but animals and birds dont";
	}
}
Trait face{

public function F(){

 }
}

Trait smile {

public function s(){

 }
}

Trait noise{

public function N(){

 }
}

class People{
 use noise, smile, brain, face;
 
 function speaking(){
   echo " we can speak";
 }
}

class Animal {
use face;
}

class birds {
 use noise;
}



$peoples= new people();

$peoples->f();
$peoples->b();
$peoples->N();
echo "<pre>"; print_r($peoples); echo "</pre>";

$Animals = new Animal(); 
echo "<pre>"; print_r($Animals); echo "</pre>";

$Birds = new birds(); 
echo "<pre>"; print_r($Birds); echo "</pre>";
*/
Trait First {
	public function SayHellow() {
		echo " first Trait";
	}
}

Trait Secound {
	public function SayHellow() {
		echo "Sechound Trait";
	}
}

class Iphone {
	use First, Secound {
	// [Trsit Name] [::]  [Method Name] [KeyWord as] [New Name]

	Secound::SayHellow insteadof First;

	}
	//[Trait Namw ] [::] [Method Name] [Keyword instead of ] [other method name]



}

$Iphone = new Iphone();
$Iphone->SayHellow();

echo "<pre>"; print_r($Iphone); echo "</pre>"; 














