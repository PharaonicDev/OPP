<?php
/*
-------------[lec11]------------
*/
class appleDevice{
	//Defult Properties
	public $ram   = '4GB';
	public $color = 'silver';
	public $space = '16GB';
	public $inch  = '4inch';
    
   
	//Method
	public function ChangeProperties($ra,$inc, $col,$spc){
     $this->ram    = $ra ;
     $this->color  = $col;
     $this->space  = $spc;
     $this->inch   = $inc; 
	}
}
//object 1 change properties

$iphone6plus = new appleDevice();
echo $iphone6plus->ram;
$iphone6plus->ChangeProperties('2GB',"5 inch","Pink","8GB");
/*
$iphone6plus->ram = '2GB';
$iphone6plus->inch = "5 inch";
$iphone6plus->color = "Pink";
*/


echo '<pre>';
var_dump($iphone6plus);
echo'</pre>';

//object 2[lec6] class properties change 

$iphone7plus = new appleDevice();
$iphone7plus->ChangeProperties('4GB',"5.5 inch","rose","23GB");
/*
$iphone7plus->ram = '6GB';
$iphone7plus->color = 'gold';
$iphone7plus->space = '100GB';

*/
echo '<pre>';
var_dump($iphone7plus);
echo'</pre>';

/*[6]class properties*/