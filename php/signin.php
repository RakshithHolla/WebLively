<?php

include_once('db.php');
//data received from ajax stored in following variables
$Id=$_POST['Id'];
$Name=$_POST['Name'];
$ImgURL=$_POST['ImgURL'];
$Email=$_POST['Email'];

echo "$Id $Name $ImgURL $Email";
//sql queries required for storing and retrieving data from database
$sql="INSERT INTO userprofile (Name, ImgURL, Email) VALUES ('$Name', '$ImgURL', '$Email');";
$sqlCheck="SELECT * FROM userprofile WHERE Email='$Email';";
//checking if data already exists

$dataExists=mysqli_query($conn,$sqlCheck);
session_start();
if($dataExists->num_rows==0){
    mysqli_query($conn,$sql);
    
    $_SESSION['loggedIn']="true";
    $_SESSION['Id']=$Id;
    $_SESSION['Email']=$Email;
}
else{
    $_SESSION['loggedIn']="true";
    $_SESSION['Id']=$Id;
    $_SESSION['Email']=$Email;
}
?>