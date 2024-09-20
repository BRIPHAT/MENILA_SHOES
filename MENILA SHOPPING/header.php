<?php
include "db_connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>MENILA SHOPPING</title>
     <link rel="stylesheet" href="style.css">
     
</head>
<body class="full">
     <section>
          <header id="navigation">
               <a href="#" class="logo"><img src="image/logo.jpg" class="logo-image"></a>

               
     <div class="navigation">
               <div class="search-icon">
                    <input type="search" id="navSearch" placeholder="Search product here">
                    <button onclick="searchShoes()" class="btn-search"><input type="submit" value="search"></button>
               </div>
              
     </div>
     <ul class="topNav">
          <li><a href="index.php">HOME</a></li>
          <li><a href="about.php">ABOUT US</a></li>
          <li><a href="contact.php">CONTACT</a></li>
          <li><a href="privacy.php">PRIVACY</a></li>
          <li><a href="login.php">LOGIN</a></li>
          <?php
      
      $query = "SELECT * FROM cart";
      $select_rows = $conn->query($query);
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <li><a href="cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a></li>
          
</ul>
     </header>
     
     </div>
     </section>

     <!-------slide picture -->
     <section class="slide1">

<div class="slide-text">
     <h1>MENILA SHOES SHOPPING</h1>
     <p>BUY MORE<span> & </span>VALUE</p>
</div>
     </section>

<!------marquee word in the slide-->
     <div class="marquee">
          <marquee>WELCOME INTO THE WORLD OF BUSINESS ONLINE</marquee>
     </div>
</body>
</html>