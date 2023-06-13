<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
  <style>
    body {
      background-color: rgb(230, 183, 165);
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    
    .container {
      width: 300px;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }
    
    .container h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    
    .container input[type="text"],
    .container input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    
    .container input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Admin Login</h2>
    <form onsubmit="validateLogin()" action="redirect.php" method="POST">
      <input type="text" id="email" placeholder="Email">
      <input type="password" id="password" placeholder="Password">
      <input type="submit" value="Login">
    </form>
  </div>

  <script>
    function validateLogin() {
      // Get the entered email and password
      var email = document.getElementById("email").value;
      var password = document.getElementById("password").value;

      // Check if the email and password match the expected admin credentials
      if (email === "shikshyadav81@gmail.com" && password === "admin123") {
        // Login successful
        // Redirect to crud.php
        window.location.href = "redirect.php";
      } else {
        // Login failed
        // Display an alert box without an "OK" button
        alert("Email and password do not match!");
        // Prevent the form submission
        event.preventDefault();
      }
    }
  </script>
</body>
</html>
