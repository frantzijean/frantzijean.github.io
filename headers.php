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
        <h1><a href="index.php">Welcome</a></h1>
        <?php

// PHP function to illustrate the use 
// of array_rand()
$array = array("1215", "1420", "1500","1600");
print_r(array_rand($array));
?>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="login.php">Login</a></li>
                
            </ul>
        </nav>
    </header>