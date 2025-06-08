<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us - Huda’s Bakery</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      background: #fff3e6;
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
    }

    .contact-container {
      max-width: 600px;
      margin: 60px auto;
      padding: 40px;
      background: white;
      border-radius: 10px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    }

    h2 {
      text-align: center;
      color: #a14e2c;
      font-family: 'Sansita Swashed', cursive;
      margin-bottom: 30px;
    }

    input, textarea {
      width: 100%;
      padding: 12px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 16px;
    }

    button {
      background-color: #a14e2c;
      color: white;
      padding: 12px 20px;
      border: none;
      font-size: 16px;
      border-radius: 6px;
      cursor: pointer;
      display: block;
      margin: auto;
    }

    button:hover {
      background-color: #823c1b;
    }
  </style>
</head>
<body>

  <div class="contact-container">
    <h2>Contact Us</h2>
    <form action="contact-submit.php" method="post">
      <input type="text" name="name" placeholder="Your Name" required>
      <input type="email" name="email" placeholder="Your Email" required>
      <input type="tel" name="number" placeholder="Your Phone Number" required>
      <textarea name="remark" rows="4" placeholder="Your Remark" required></textarea>
      <button type="submit">Send Message</button>
    </form>
  </div>

</body>
</html>
