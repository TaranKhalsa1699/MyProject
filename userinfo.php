<?php
$con = mysqli_connect("localhost","root");

if($con){
    echo "Connection Successful";
}
else{
    die ("No connection" . mysqli_connect_error());
}

mysqli_select_db($con, "tour&travelsdata");
$user = $_POST['user'];
$email = $_POST['email'];
$mobilephoneno = $_POST['mobile phone no'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$comments = $_POST['comments'];

$query = " insert into userinfodata (user, email, mobile phone no, address, gender, comments)
values ('$user', '$email', '$mobilephoneno', '$address', '$gender', '$comments') ";

echo "$query";

mysqli_query($con, $query);

header('location:index.php');

?>
