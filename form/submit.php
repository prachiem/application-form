<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "recknot_apply";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection failed : " . $conn->connect_error);
} 

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email']; 
$contact=$_POST['contact'];
$gender=$_POST['gender'];
$DOBday=$_POST['DOBday'];
$DOBmonth=$_POST['DOBmonth'];
$DOByear=$_POST['DOByear'];
$age=$_POST['age'];
$laptop=$_POST['laptop'];
$available=$_POST['available'];
$net=$_POST['net'];
$address=$_POST['address'];
$interest=$_POST['interest'];
$college=$_POST['college'];
$course=$_POST['course'];
$completionyear=$_POST['completionyear'];
$cv=$_POST['cv'];

$insert = "INSERT INTO `form`(`FirstName`, `LastName`, `Email`, `ContactNumber`, `Gender`, `DOBDay`, `DOBMonth`, `DOBYear`, `Age`, `Laptop`, `Available`, `Internet`, `Address`, `Reason`, `CollegeName`, `Course`, `CompletionYear`, `CV`, `Date`) VALUES ('$firstname','$lastname','$email','$contact','$gender','$DOBday','$DOBmonth','$DOByear','$age','$laptop','$available','$net','$address','$interest','$college','$course','$completionyear','$cv',current_timestamp());";

if($conn->query($insert)==true){
    $query = true;
}
else{
    echo "Error : $sql <br> $conn->error";
}
$conn->close();

// code to store the submitted data in a database or send an email notification
if ($query == true) {
    echo "Thank you for submitting your application, $firstname. We will get back to you soon.";
}

?>
