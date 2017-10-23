<?php

require "Apple.php";
require "lg.php";
require "sony.php";

$IPhone = new Apple\CreatePhone();
$IPhone->SayHellow();
print_r($IPhone);


$Sonny= new Sonny\CreatePhone();
$Sonny->SayHellow();
print_r($Sonny);


$LG= new LG\CreatePhone();
$LG->SayHellow();
print_r($LG);
