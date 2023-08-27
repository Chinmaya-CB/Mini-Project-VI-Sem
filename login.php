<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }
    
    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin-top: 100px;
      opacity: 0;
      transform: translateY(20px);
      animation: appear 0.5s forwards;
    }

    @keyframes appear {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    h2 {
      text-align: center;
      margin-top: 0;
      padding-top: 20px;
      border-top: 1px solid #ccc;
      position: relative;
      animation: slideIn 1s forwards;
    }

    @keyframes slideIn {
      from {
        transform: translateY(-100px);
      }
      to {
        transform: translateY(0);
      }
    }
    
    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
      opacity: 0;
      transform: translateX(-20px);
      animation: appear 0.5s forwards;
      animation-delay: 0.2s;
    }

    input[type="text"],
    input[type="password"],
    input[type="submit"] {
      opacity: 0;
      transform: translateX(-20px);
      animation: appear 0.5s forwards;
      animation-delay: 0.4s;
    }

    @keyframes appear {
      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 3px;
      transition: border-color 0.3s;
    }

    input[type="text"]:focus,
    input[type="password"]:focus {
      border-color: #4CAF50;
    }
    
    input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      border: none;
      color: #fff;
      cursor: pointer;
      border-radius: 3px;
      transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
    
    .error {
      color: red;
      font-size: 14px;
      margin-top: 10px;
      opacity: 0;
      animation: appear 0.5s forwards;
      animation-delay: 0.6s;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Login</h2>
    <form id="loginForm" action="main.php" method="post">
      <label for="username">Username</label>
      <input type="text" id="username" name="username" required>
      
      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>
      
      <input type="submit" value="Login">
    </form>
    <div id="error" class="error"></div>
  </div>

  <script>
    document.getElementById("loginForm").addEventListener("submit", function(event) {
      event.preventDefault();
      var username = document.getElementById("username").value;
      var password = document.getElementById("password").value;

      if (username === "admin" && password === "12345") {
        // Submit the form to the PHP page
        document.getElementById("loginForm").submit();
      } else {
        var error = document.getElementById("error");
        error.textContent = "Invalid username or password";
        error.style.opacity = 1;
      }
    });
  </script>
</body>
</html>
