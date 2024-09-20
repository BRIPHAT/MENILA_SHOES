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
<body class="form" id="login">
    
     <form action="login_handler.php" method="post">
          <fieldset id="sigin-form">
          <h2>WELCOME TO LOGIN ACCOUNT MENILA SHOES SHOPPING</h2>
        <input type="text" name="username" placeholder="username"><br>
          <input type="password" name="password" placeholder="password"><br>
          <input type="submit" value="Login into  Account" name="login"><br>    
              <a href="forgot_password.php"><p  style="color: red;">Forgot Password</p></a>
               <p>Don't have an account? <a href="registration.php">Register here</a></p>
          </fieldset>
         </form>
     </body>
</html>