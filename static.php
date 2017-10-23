<?php
/*
  [static Keyword]

  -Static Properties/Methods are used to Access Properties in  a Global Scope

  -Declaring class Properties or Method as Static
   Makes them Accessible without Needing an Instantian of the class

   - Because Static Methods are Callable Without an  Instance of the Object created,
   The Pseudo-Variable $this is not Available Inside the Method Declared as  Static.

   -"one of the Major Benfits to using static properties"

   is that they keep their Stored Values for the Duration of the script.

*/


   class Ipone  {
   	public static $name = "abubakr";
   	public static $ram = "3GB";

   	public static function sayHellow(){
   		return "Hellow";
   	} 
   }
echo Ipone::sayHellow() ."<br>";
echo Ipone::$name ."<br>";
echo Ipone::$ram ."<br>";
