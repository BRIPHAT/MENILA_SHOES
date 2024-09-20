<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>MENILA SHOES SHOPPPING</title>
     <link rel="stylesheet" href="style.css">
     <script src="script.js"></script>
</head>
<body class="form" >
<?php include "header.php"; ?>

<h1>Forgot Password</h1>

<form action="reset_password.php" method="POST">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <input type="submit" value="Reset Password">
</form>
<?php
include "footer.php"; ?>
</body>
</html>
