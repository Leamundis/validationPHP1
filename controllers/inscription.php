<?php
session_start();

$email = $_POST['email']; 
$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
if (preg_match($regex, $email)) {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['firstname'] = $_POST['firstname'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['pseudo'] = $_POST['pseudo'];
    $_SESSION['totalCost'] = 0;
    
    if ($_POST['pseudo'] == "All Might") {
        $_SESSION['crystal'] = 5000;
    } else {
        $_SESSION['crystal'] = 50;
    }
    header('Location: ../inscription.php');
} else { 
    $_SESSION['regex'] = false;
    header('Location: ../inscription.php');
}





header('Location: ../inscription.php');