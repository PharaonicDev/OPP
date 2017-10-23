<?php
 /*
 (6) Clone
  it used when you take a copy from an opject and wont to change in properties to make.  
 */
class user {

  public $name;
  public $Email;

  public function __construct($n, $e){
  	$this->name  = $n;
  	$this->Email =$e ;


  }
}

$user_Defult = new user ();
$user_Defult ->name = "ali";
$user_Defult ->Email = "ali@gmail.com";
$user_1 = Clone $user_Defult;
$user_1 ->name = "salma";
  // [Email] it will clone from the Default_user.
echo "<pre>"; print_r($user_Defult); echo "<pre>";
echo "<pre>"; print_r($user_1); echo "<pre>";



