<?php
//file for validation of user input data 
include "db_connection.php";
function verify_data($input){
$input = trim($input);
$input = stripslashes($input);
$input = htmlspecialchars($input);
return $input;

}
    
