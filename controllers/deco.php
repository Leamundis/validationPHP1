<?php


session_start();
unset($_SESSION['name']);
unset($_SESSION['firstname']);
unset($_SESSION['pseudo']);
unset($_SESSION['email']);
unset($_SESSION['crytal']);
session_destroy();


header('Location: /');