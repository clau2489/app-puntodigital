<?php

if(count($_POST)>0){
	$user = MedicData::getById($_POST["user_id"]);
	$user->name = $_POST["name"];
	$user->lastname = $_POST["lastname"];
	$user->city = $_POST["city"];
	$user->address = $_POST["address"];
	$user->email = $_POST["day_of_birth"];
	//$user->category_id = $_POST["category_id"];
	$user->update();


print "<script>window.location='index.php?view=medics';</script>";


}


?>