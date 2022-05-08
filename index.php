<?php 
    require_once "db.php";
    if ($_SERVER['REQUEST_METHOD']==='POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        $sql = "";
        
        // The user is checked from the system using the email they 
        // have provided
        $sql = "SELECT * FROM `client` WHERE email='$email'";
       $result = $conn->query($sql);
      
      
      if ($result->num_rows > 0) {
          
        } else {
                $sql = "INSERT INTO client(name,email,password) VALUES('$name','$email','$password')";
                $conn->query($sql);
                $_SESSION['name'] = $user['name'];
                $_SESSION['email'] = $user['email'];
    
                header('Location: help_desk.php');
            
        }
          
  
  } 
    include_once "headers.php";
?>
    <main>
        <div class="date">
            <h2></h2>
        </div>
        <p>
        A help desk could be defined as the tool which organizes all customer communication for helping the businesses with 
        responding to customers and provide support to them more swiftly and efficiently.
        Using a helpdesk permits your support team into offering the best plausible service to the customers.
        </p> 
 <form action="index.php" method="post">
            <h3>Register</h3>
            <input type="text" name="name" placeholder="Enter Full Name">
            <input type="email" name="email" placeholder="E-mail Address">
            <input type="password" name="password" placeholder="Password">
            <button type="submit">Register</button>
        </form>
    </main>
    <script>
        const dateAndTime = document.querySelector('.date>h2')

        dateAndTime.textContent = `${new Date().toLocaleDateString()}, ${new Date().toLocaleTimeString()}`

        setInterval(()=>{
            dateAndTime.textContent = `${new Date().toLocaleDateString()}, ${new Date().toLocaleTimeString()}`

        },1000)
    </script>

    
</body>
</html>