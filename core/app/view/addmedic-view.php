<?php
if(count($_POST)>0){
	$user = new MedicData();
	$category_id = "NULL";
	if($_POST["category_id"]!=""){ $category_id = $_POST["category_id"]; }
	$user->name = $_POST["name"];
	$user->lastname = $_POST["lastname"];
	$user->day_of_birth = $_POST["day_of_birth"];
	$user->address = $_POST["address"];
	$user->city = $_POST["city"];
	$user->category_id = $category_id;	
	$user->add();
print "<script>window.location='index.php?view=medics';</script>";
}
?>