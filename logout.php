<?php
    session_start();
    if($_SESSION['name'] &&
        $_SESSION['email']) {
            session_unset();
            session_destroy();
            header('Location: index.php');
    } 
    header('Location: index.php');
    