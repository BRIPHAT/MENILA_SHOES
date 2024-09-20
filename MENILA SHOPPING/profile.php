<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>MENILA SHOPPING</title>
     <link rel="stylesheet" href="style.css">
</head>
<body>
  
<h1>Welcome, <?php echo $username; ?>!</h1>
    <p>This is your dashboard. You are logged in.</p>
<!-- Create a form that will send a POST request to the same PHP file -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <!-- Create a hidden input field with the name 'logout' and the value 'true' -->
    <input type="hidden" name="logout" value="true">
    <!-- Create a submit button with the text 'Logout' -->
    <input type="submit" value="Logout">
</form>


   

