<?php
/*
 class  & object
 -class is Blueprint that u can  create object from
 -object ia a member in the main application
 -class has aproperties $ Method
 -variable Inside class  = [Property]
 -variable outside class = [Variable]
 -Function inside class  = [method]
 -Function outside class = [function]
 -[class]                      = class Keyword
 -[new]                        =New Object Keyword
 -[public, private, protected] = vissibility Makers
 -[->]                         = object operator
 -[$this] = pseudo Variable [refer to Object Properties]
 -[::] = scope Resolution operator [paamyim Nekudotayim] = Double colons

 web application Registration
 -class = code to Add New Member
 -object = the Member
 -Application = wep application Registration


 Blog system 
 -class = code to add new post , article , news,information
 -object = post , article , News, Information
 -Application = Blog System 
*/
class appleDevice{
	//Defult Properties
	public $ram   = '16GB';
	public $color = 'silver';
	public $space = '16GB';
	public $inch  = '4inch';
    public $OwnerName  ;
    /*------------[lec12  Encpasulationl]-----------*/
    private $password ;//privaite Edite and change

    //constants
    const OWNERNAME = 5;
	//Method
	 public function  setOwnerName($owner){ /* [8]pesudo variables */
	 	if (strlen($owner) < self ::OWNERNAME){
	 		echo "OwnerName cant less than ".  self ::OWNERNAME ." chars";
	 	} else {
	 		echo"OwnerName has been set";
	 	}
	 }

	 public function ChangrPassword($Pass){
	 	$this->password = sha1($Pass) ;//[sha1] encapsulation your date with # system to prevent show or understand 
	 }
}
//object 1 change properties

$iphone6plus = new appleDevice();
$iphone6plus->ram = '2GB';
$iphone6plus->inch = "5 inch";
$iphone6plus->color = "Pink";
$iphone6plus->ChangrPassword("123");
//$iphone6plus->OwnerName="Nada";
$iphone6plus->setOwnerName("Nada");
echo $iphone6plus::OWNERNAME;
echo appleDevice::OWNERNAME;
echo $iphone6plus->password;


echo '<pre>';
var_dump($iphone6plus);
echo'</pre>';

//object 2[lec6] class properties change 

$iphone7plus = new appleDevice();
$iphone7plus->ram = '6GB';
$iphone7plus->color = 'gold';
$iphone7plus->space = '100GB';
$iphone7plus->setOwnerName("abubakr");
echo '<pre>';
var_dump($iphone7plus);
echo'</pre>';

/*[6]class properties*/