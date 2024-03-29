<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Death-Lifter</title>
  <style>
    * {
      margin: 0px;
      padding: 0px;
    }

    body {
      font-family: Arial, sans-serif;
    }

    .main h3 {
      font-weight: bold;
      color: black;
    }

    .main {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .main img {
      margin-top: 50px;
      width: 200px;
    }

    .logo {
      background-color: black;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .content {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .linku {
      padding: 8px 16px;
      margin-top: 5px;
      text-decoration: none;
      background-color: green;
      color: black;
      font-size: 21px;
      text-align: center;
      border-radius: 5px;
      font-weight: bold;
    }

    h3 {
      text-align: center;
    }

    .linku:hover {
      color: white;
      background-color: black;
    }
  </style>
</head>

<body>
  <div class="logo">
    <img src="logo.jpg" alt="logo" width="200px" />
  </div>

  <div class="main">
    <img src="completed.png" alt="Successfully" width="200px" /><br />
  </div>

  <h3>You have created your account Successfully!</h3>

  <h3>Let's start the work now!</h3>

  <div class="content">
    <a href="home.php" class="linku">Home</a>
  </div>
</body>

</html>