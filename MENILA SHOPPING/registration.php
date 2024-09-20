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
<body class="form" id="register">
    
     <form action="registration_handler.php" method="post">
          <fieldset id="form">
          <h2>CREATE ACCOUNT MENILA SHOES SHOPPING</h2>
        <input type="text" name="username" placeholder="username"><br>
          <input type="E-mail" name="email" placeholder="email"><br>
          <input type="password" name="password" placeholder="password"><br>
          <input type="password" name="confirm password" placeholder="confirm password"><br>
          <input type="submit" value="Create Account" name="register" class="register_cursor">
          <input type="checkbox" required>
          <h5 style="color:black">Creating an account you accept and agree with terms services and privacy policy guided all activities facilitated in the website</h5>
          <p>Already have an account? <a href="login.php">Login here</a></p>
          </fieldset>
         </form>
     </body>
</html>
