<?php
    require_once "db.php";
    // Login logic is performed here
    if ($_SERVER['REQUEST_METHOD']==='POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        $sql = "";
        
        // The user is checked from the system using the email they 
        // have provided
        $sql = "SELECT * FROM client WHERE email='$email'";
       $result = $conn->query($sql);

       
      if ($result->num_rows > 0) {
          
            $user = $result->fetch_assoc();
               if ($password === $user['password']) {
                   $_SESSION['name'] = $user['name'];
                   $_SESSION['email'] = $user['email'];
       
                   header('Location: help_desk.php');
               }
          } 
          
  
  } else if(!empty($_SESSION['name']) &&
    !empty($_SESSION['email'])) {
       header('Location: help_desk.php');
  } 
    include_once "headers.php";
?>
<main>
<form action="login.php" method="post">
    <h3>Login</h3>
    <input type="email" name="email" placeholder="E-mail Address">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Login</button>
</form>
</main>
</body>
</html>