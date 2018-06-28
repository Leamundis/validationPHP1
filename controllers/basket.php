<?php

session_start();


$_SESSION[$_POST['names']['name'][0]] = $_POST;


$_SESSION['crystal'] -= $_POST['cost'];
header('Location: /normalQuirk.php');