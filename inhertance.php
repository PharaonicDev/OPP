<?php
/*----------[lec13]----------*/

final class PhoneDevice{
	public $operatingSystem ;
	public $shape;

}
/*----------lec[15]final----------->
 *(final)class or function cant be inhertant or edit
  - not extensiple
  -break encabsulation
  -
*/

class appleDevice{
	//Defult Properties(super class)
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
/*----------lec[14]override--------*/
	public function sayHellow($PName){
		$this->PhoneName = $PName ;
		echo 'welcom to '. $PName ;
		
	}
}
/**
   * inhert sonny class from apple and adding new features
*/
class Sony extends appleDevice //(sub class)
{
	public $camera  ='25MB';
    public $screen ;
    public $battry ;
	//methods
	public function NewFeatures($scr,$batr){
		$this->screen = $scr;
		$this->battry   =$batr;
	}

	//function for say hellow to user
	public function sayHellow($PName){
		$this->PhoneName = $PName ;
		echo 'welcom to '. $PName .' '.' smartphone' ;
	}

}

$iphone6plus = new appleDevice();
$iphone6plus->ChangeProperties('2GB',"5 inch","Pink","8GB");
$iphone6plus->sayHellow('appleIphone');
$iphone6plus->price = "999$";
echo '<pre>'; print_r($iphone6plus);echo'</pre>';

$iphoneSonny = new Sony();
$iphoneSonny->NewFeatures('touch','work as abomb');
$iphoneSonny->sayHellow('Sony');
echo '<pre>'; print_r($iphoneSonny);echo'</pre>';
