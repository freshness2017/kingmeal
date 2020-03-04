<?php

$target="images/";
$national_id="";
$first_name="";
$second_name="";
$last_name="";
$email="";
$phone_number="";
$username="";
$sponsor_username="";
$password="";
$password1="";
$images="";
$errors= array();
//connect to the db
$db = mysqli_connect('localhost','root','','hope_charity_db');


//if the register buttnational_id
if(isset($_POST['register'])) {
	
	$national_id =mysql_real_escape_string($_POST['national_id']) ;
 	$first_name = mysql_real_escape_string($_POST['first_name']) ;
 	$second_name =mysql_real_escape_string($_POST['second_name']) ;
 	$last_name =mysql_real_escape_string($_POST['last_name']) ;
 	$email =mysql_real_escape_string($_POST['email']) ;
 	$phone_number =mysql_real_escape_string($_POST['phone_number']) ;
 	$username =mysql_real_escape_string($_POST['username']) ;
 	$sponsor_username =mysql_real_escape_string($_POST['sponsor_username']) ;
 	$password =mysql_real_escape_string($_POST['password']) ;
 	$password1 =mysql_real_escape_string($_POST['password1']) ;
 	$target="images/".basename($_FILES["images"]["name"]);
    $images=mysqli_real_escape_string($_FILES['images']['name']);


    if (empty($national_id)) {
    	array_push($errors, "Natonal id is required");
    }
    if (empty($first_name)) {
    	array_push($errors, "first name is required");
    }if (empty($second_name)) {
    	array_push($errors, "second name is required");
    }if (empty($last_name)) {
    	array_push($errors, "last name is required");
    }if (empty($email)) {
    	array_push($errors, "email is required");
    }if (empty($phone_number)) {
    	array_push($errors, "phone number is required");
    }if (empty($username)) {
    	array_push($errors, "username is required");
    }if (empty($sponsor_username)) {
    	array_push($errors, "sponsor username is required");
    }if (empty($password)) {
    	array_push($errors, "Password is required");
    }if (empty($images)) {
    	array_push($errors, "Image is required");
    }
    
	
	if (Password!=password1) {
    	array_push($errors, "The two password do not match");
    }
    if (count($errors)==0) {
    	$password = md5($password);
    	$sql="INSERT INTO users_tbl (national_id,first_name,second_name,last_name,email,phone_number,username,sponsor_username,password,images) VALUES ('$national_id','$first_name','$middle_name', '$last_name', '$email', '$phone_number','$username','$sponsor_username','$password','$images')";
		mysqli_query($db, $sql );

    }
}







?>