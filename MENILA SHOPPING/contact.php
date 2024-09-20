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
    <?php include "header.php";?>
<!---------------contact side---------------->
<section class="help_info" style=" color:black; background-color: lightblue;">
<h1>Contact Us</h1>

<p>We're here to assist you. Please complete the form below or reach out to us using the provided contact information.</p>

<form action="submit_contact_form.php" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="subject">Subject:</label>
    <input type="text" id="subject" name="subject" required>

    <label for="message">Message:</label>
    <textarea id="message" name="message" required></textarea>

    <input type="submit" value="Submit" name="contact_submit">
</form>

<h2>Contact Information</h2>

<p>If you prefer to contact us directly, you can reach us using the following details:</p>

<ul>
    <li><h3>Email: info@menilashoes.com</h3></li>
    <li><h3>Phone: +255 766-713-471</h3></li>
    <li><h3>Address: 123 Shoe Street, Dar Es Salaam, Tanzania</h3></li>
</ul>

<p>We strive to respond to all inquiries within 24-48 hours. Thank you for choosing Menila Shoes!</p>
</section>
<?php include "footer.php"; ?>

</body>
</html>

