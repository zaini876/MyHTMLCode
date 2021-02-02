<?php



$host="localhost";
$usernameSQL="root";
$passwordSQL="";
$dbname="my_project_zain";

$conn = mysqli_connect($host, $usernameSQL, $passwordSQL,$dbname);

if(!$conn)
{
    die("Conncection error ".mysqli_connect_error()); 
}

    
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

?>