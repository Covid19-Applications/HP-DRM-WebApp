<?php
include('security.php');


$link = mysqli_connect("localhost", "cerenorddtfq", "Hackathon@1437", "hackathon");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

    $name = mysqli_real_escape_string($link, $_REQUEST['fullname']);
    $email = mysqli_real_escape_string($link, $_REQUEST['email']);
    $phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
    $license = mysqli_real_escape_string($link, $_REQUEST['license']);
    $address = mysqli_real_escape_string($link, $_REQUEST['address']);
    $timings = mysqli_real_escape_string($link, $_REQUEST['timings']);
        

$sql = "INSERT INTO `doc_registration`(`name`, `email`, `phone`, `license`, `address`, `timings`) VALUES ('$name','$email', '$phone', '$license',  '$address', '$timings')";
            
   
   

if(mysqli_query($link, $sql)){
    echo '<script language="javascript">';
    echo 'alert("Appointment Send Successfully")';
    echo '</script>';
     header('Location: doc-apt.php');  
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>