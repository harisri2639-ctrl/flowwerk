<?php

include("db.php");

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$product = $_POST['product'];
$message = $_POST['message'];

$sql = "INSERT INTO rfq
(name,email,phone,product,message)
VALUES
('$name','$email','$phone','$product','$message')";

if(mysqli_query($conn,$sql))
{
    echo "Inquiry Submitted Successfully!";
}
else
{
    echo mysqli_error($conn);
}

?>