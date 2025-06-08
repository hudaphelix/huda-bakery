<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bakery Login</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      
  background: url('back3.avif') no-repeat center top;
  background-size: cover;
  background-attachment: fixed;
  background-repeat: no-repeat;
    
      font-family: 'Poppins', sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .login-box {
  background: rgba(255, 255, 255, 0.15); /* transparent white */
  backdrop-filter: blur(10px); /* blur the background behind */
  -webkit-backdrop-filter: blur(10px); /* for Safari */
  padding: 40px 30px;
  border-radius: 12px;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
  max-width: 400px;
  width: 100%;
  text-align: center;

}

    .login-box h2 {
      margin-bottom: 20px;
      color: #a14e2c;
      font-family: 'Sansita Swashed', cursive;
    }

    .login-box input {
      width: 90%;
      padding: 12px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 16px;
    }

    .login-box button {
      background-color: #a14e2c;
      color: white;
      border: none;
      padding: 12px 25px;
      font-size: 16px;
      border-radius: 8px;
      cursor: pointer;
      margin-top: 10px;
      transition: background-color 0.3s ease;
    }

    .login-box button:hover {
      background-color: #823c1b;
    }

  </style>
</head>
<body>

  <form class="login-box" action="validate.php" method="POST">
    <h2>Login to Tom's Bakery </h2>
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit">Login</button>

  </form>

</body>
</html>
