<?php

$randomNumber = rand(1000,2000);

  
require_once "db.php";
    // if (!$_SESSION['email'] || empty($_SESSION['email'])) {
    //     header('Location: login.php');
    // }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>HOME</title>
</head>
<body>
    <header>
        <h1>Help Desk</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

<main class="help-desk">
<?php
print_r($randomNumber);
?>
<ul>
              <div id="hp"></div>
  <h3>Help video</h3><br><br>
  <p>Here some tips that will help you concerning your issue <br>
    by clicking on this video below</p> <br>
    <div class="iframe">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/Wz1Pf72gsCw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
    <br>
        </ul>

        <aside>Useful Links of Help_Desk Websites:<br>
            <a href="https://www.hubspot.com/products/service/help-desk">www.hubspot.com</a><br>
                <a href="https://www.answerdash.com/">WWW.answerdash.com</a> <br>
                <a href="https://support.oracle.com/portal/">www.support.oracle.com</a>      
        </aside>


</main>