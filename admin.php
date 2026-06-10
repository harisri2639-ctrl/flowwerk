<?php
include("db.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin - Customer Inquiries</title>

<style>
body{
    font-family: Arial, sans-serif;
    padding:20px;
}

h1{
    color:#002B5B;
}

table{
    width:100%;
    border-collapse:collapse;
}

table, th, td{
    border:1px solid #ddd;
}

th{
    background:#002B5B;
    color:white;
    padding:10px;
}

td{
    padding:10px;
}

tr:nth-child(even){
    background:#f5f5f5;
}
</style>

</head>
<body>

<h1>Customer Inquiries</h1>

<table>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Product</th>
    <th>Message</th>
    <th>Date</th>
</tr>

<?php

$sql = "SELECT * FROM rfq ORDER BY id DESC";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result))
{
?>

<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['phone']; ?></td>
    <td><?php echo $row['product']; ?></td>
    <td><?php echo $row['message']; ?></td>
    <td><?php echo $row['created_at']; ?></td>
</tr>

<?php
}
?>

</table>

</body>
</html>