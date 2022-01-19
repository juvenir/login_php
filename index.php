<?php
session_start();

if (isset($_SESSION['id']) && empty($_SESSION['id']) == false) {
    echo "Meu index";
} else {
    header("Location: login.php");
}

?>