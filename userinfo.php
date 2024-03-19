<?php
$con = mysqli_connect("localhost","root");

if($con){
    echo "Connection Successful";
}
else{
    echo "No connection";
}

mysqli_select_db($con, 'tripdata');
$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$comments = $_POST['comments'];

$query = " insert into userinfodata (user, email, mobile, address, gender, comments)
values ('$user', '$email', '$mobile', '$address', '$gender', '$comments') ";

echo "$query";

mysqli_query($con, $query);

header('location:index.php');

?>
