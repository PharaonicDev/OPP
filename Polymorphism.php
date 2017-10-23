<?php
/*
Polymorphisim Without Body Code 
(give you  multi faces to use it in building classes)
*/

interface DBConnects{
	public function getUsers();
	public function getArticles();
	public function showStats();
}

class MySQL implements DBConnects {
	public function getUsers(){
		echo " SELECT * FROM users". "<br>";
	}

	public function getArticles(){
		echo " SELECT * FROM articles" . "<br>";
	}
	public function showStats(){
		echo " SELECT * FROM showStats". "<br>";
	}
}

class ORACL implements DBConnects{

	public function getUsers(){
		echo " hellow  users". "<br>";
	}

	public function getArticles(){
		echo " hellow from  articles". "<br>";
	}
	public function showStats(){
     echo "hellow from stats". "<br>";
	}
}
$row = new MySQL ();
$row->getArticles();
$row->showStats  ();
$row->getUsers   ();
//echo "<pre>"; print_r($row) ; echo "<pre>";



$rows = new ORACL ();
$rows->getArticles();
$rows->showStats  ();
$rows->getUsers   ();
//echo "<pre>"; print_r($rows) ; echo "<pre>";

