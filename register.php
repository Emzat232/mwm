<?php

include 'connect.php'

if(isset($_POST['Register'])){
$Names=$_POST['Names'];
$Surname=$_POST['Surname'];
$Identity=$_POST['Identity'];
$Contact=$_POST['Contact'];
$Email=$_POST['Email'];
$Username=$_POST['Username'];
$Password=$_POST['Password'];
$Password=md5($password);

$checkEmail="SELECT * FROM seventwelve where email='$Email'";
$result=$conn->query($checkEmail);
  if ($result->num_rows>0) {echo "Email Address Already Exists!"
    }
  else {$insertQuery="INSERT INTO seventwelve (Names, Surname, Identity, Contact, Email, Username, Password) 
    VALUES ('$Names', '$Surname', '$Identity', '$Contact', '$Email', '$Username', '$Password')";
  if ($conn->query($insertQuery)==TRUE){
    header(location: login.html)}     
  else {echo "Error:".$conn->error}
       }
}

if (issert($_POST['Login'])){
  $Email=$_POST['Email'];
  $Password=$_POST['Password'];
  $Password=md5($Password);

$sql="SELECT * FROM seventwelve WHERE Email='$Email' and Password='$Password'";
  $result=$conn->query($sql);
    if{$result->num_rows>0){
      session_start();
       $row=$result->fetch_assoc();
         $_SESSION['Email']=$row['Email'];
       header("Location: home.html");
      exit();
    }
  else {echo "Incorrect Email Or Password.";
  }
}
?>
