<?php

if(count($_POST)>0){
	$user = PacientData::getById($_POST["user_id"]);
	$user->coverage_id = $_POST["coverage_id"];
	$user->lastname = $_POST["lastname"];
	$user->name = $_POST["name"];
	$user->document = $_POST["document"];
	$user->gender = $_POST["gender"];
	$user->day_of_birth = $_POST["day_of_birth"];	
	$user->address = $_POST["address"];
	$user->neigh = $_POST["neigh"];
	$user->city = $_POST["city"];	
	$user->email = $_POST["email"];
	$user->phone = $_POST["phone"];
	$user->whatsapp = $_POST["whatsapp"];
	$user->fb = $_POST["fb"];
	$user->ig = $_POST["ig"];
	$user->lk = $_POST["lk"];
	$user->update();

//Core::alert("Actualizado exitosamente!");
print "<script>window.location='index.php?view=pacients';</script>";


}


?>