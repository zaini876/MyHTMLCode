<?php

//session_start();



$host="localhost";
$usernameSQL="root";
$passwordSQL="";
$dbname="my_project_zain";

$conn = mysqli_connect($host, $usernameSQL, $passwordSQL,$dbname);

if(!$conn)
{
    die("Conncection error ".mysqli_connect_error()); 
}

 if($_POST['status'] == "login")  
 {
   $u_name  = $_POST['user_login_name'];
   $u_pass  = $_POST['user_login_password'];

    // Insert Query to Table 'signup' in php_my_admin for login and signup 
    $sql = "SELECT  Username,  userpassword FROM signup WHERE VALUES =  '".$u_name."' && '".$u_pass."'";
    
    if (mysqli_query($conn, $sql)) 
    {
      echo "Login Successful.!";
     
    } 
    else
     {
      echo "Error: " . $sql . "<br>" .mysqli_error($conn);
    }
    mysqli_close($conn);
  
 } 
 else if($_POST['status'] == "signup")  
 {

$u_name     =   $_POST['user_name'];
$u_fullname =   $_POST['user_fullname'];
$u_dob      =   $_POST['user_dob'];
$u_email    =   $_POST['user_email'];
$u_pass     =   $_POST['user_password'];
   // Insert Query to Table 'signup' in php_my_admin for login and signup 
   $sql = "INSERT INTO signup (Username, FullName, dob, email, userpassword ) VALUES ('".$u_name."' , '".$u_fullname."' , '".$u_dob."' , '".$u_email."' , '".$u_pass."')";
    
   if (mysqli_query($conn, $sql)) 
   {
     echo "New record created successfully." ;
    
   } 
   else
    {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
   mysqli_close($conn);
  
 } 

 



?>