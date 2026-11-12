<?php

if($_SERVER["REQUEST_METHOD"] != "POST"){
    die("Please submit the form from index.html");
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$course = $_POST['course'];
$address = $_POST['address'];

?>

<!DOCTYPE html>
<html>
<head>

<title>Registration Successful</title>

<style>

body{
    font-family:'Segoe UI',sans-serif;
    background:#f4f6f9;
}

.card{
    width:700px;
    margin:50px auto;
    background:white;
    padding:30px;
    border-radius:15px;
    box-shadow:0 5px 20px rgba(0,0,0,0.2);
}

h2{
    text-align:center;
    color:green;
    margin-bottom:20px;
}

table{
    width:100%;
    border-collapse:collapse;
}

th{
    background:#1e3c72;
    color:white;
    padding:12px;
}

td{
    padding:12px;
    border:1px solid #ddd;
}

tr:nth-child(even){
    background:#f8f9fa;
}

</style>

</head>

<body>

<div class="card">

<h2>✅ Registration Successful</h2>

<table>

<tr>
<th>Field</th>
<th>Information</th>
</tr>

<tr>
<td>Full Name</td>
<td><?php echo $name; ?></td>
</tr>

<tr>
<td>Email</td>
<td><?php echo $email; ?></td>
</tr>

<tr>
<td>Phone Number</td>
<td><?php echo $phone; ?></td>
</tr>

<tr>
<td>Course</td>
<td><?php echo $course; ?></td>
</tr>

<tr>
<td>Address</td>
<td><?php echo $address; ?></td>
</tr>

</table>

</div>

</body>
</html>