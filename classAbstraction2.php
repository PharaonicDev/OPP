<?php

/*	----------------[lec17 apstract class]part2----------------
* Rules to  Go 
* force developer to follow your Methods

*/

abstract class MakeDevice{

abstract public function TestPerformance();

abstract public function VerfieOwner();

abstract public function SayWelcome($n);


}


class AppleDevice extends MakeDevice{
  
  	public $owner;
	public $performance;
	public $verfication;

	public function TestPerformance(){
	 echo "good";

	 }//1
	public function VerfieOwner(){ 

	echo "apple.inc";

	}//2
	public function SayWelcome($A){
	$this ->owner = $A;
	 echo "hellow . $A";


	 }//3

}

class SamsungDevice extends MakeDevice{

	public $owner;
	public $performance;
	public $verfication;

	public function TestPerformance(){ echo "bad";}//1
	public function VerfieOwner(){ echo "samsung.inc";}//2
	
	public function SayWelcome($S){
     $this ->owner =$S; 
	 echo "fuck you" . $S;}//3

}


//print

$iphone7 = new AppleDevice();
$iphone7->SayWelcome("Abubakr");
//echo "<pre>" . print_r($iphone7) . "</pre>" ;



$Sedge8 = new SamsungDevice();
$Sedge8->SayWelcome("Nada");
//echo "<pre>" . print_r($Sedge8) . "</pre>" ;