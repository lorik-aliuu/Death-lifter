<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="logo-removebg-preview.png" type="image/x-icon" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  <title>Contact us - Death Lifter</title>
  <style>
    * {
      margin: 0px;
      padding: 0px;
      box-sizing: border-box;
      font-family: 'Popins', sans-serif;
    }





    @media only screen and (max-width: 1200px) {

      .container {
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .first {
        margin-top: 20px;
        display: flex;
        justify-content: center;
        flex-direction: column;

      }
    }

    @media only screen and (max-width: 900px) {

      .container {
        display: flex;
        flex-direction: column;
        justify-content: center;
      }

      .first {
        margin-top: 20px;
        display: flex;
        justify-content: center;
        flex-direction: column;

      }

    }

    body {
      background-color: black;
    }

    .content h2 {
      color: white;
      text-align: center;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin-top: 20px;
      font-size: 36px;
    }

    .content p {
      color: white;
      text-align: center;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin-top: 5px;
      padding: 25px;
      font-weight: 390;
    }



    .container {
      display: flex;
      justify-content: space-between;
      margin-top: 40px;
      background-color: white !important;
    }

    .first {
      display: flex;
      justify-content: center;
      flex-direction: column;
      margin-left: 40px;
    }

    .contactForm {
      padding: 40px;

      margin-right: 40px;

      background-color: white;
      color: black;
      width: 450px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      border-radius: 21px;
    }

    .contactForm label {
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
      font-size: 13px;
    }

    .contactForm input {
      background-color: white;
      padding: 7px;
      color: white;
      border-radius: 10px;
      width: 100%;
      color: black;
    }

    .contactForm input:focus {
      background-color: black;
      color: white;
      font-weight: bold;
    }

    .contactForm textarea {
      height: 100px;
      width: 100%;
      border-radius: 10px;
      color: black;
    }

    .contactForm textarea:focus {
      background-color: black;
      color: white;
      font-weight: bold;
    }


    .Send:hover {
      background-color: black;
      color: white !important;
    }

    .inputBox span {
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
      font-size: 13px;
    }
  </style>
</head>

<body>
  <?php

  include 'header.php';

  ?>

  <div class="content">
    <h2>Contact us</h2>
    <p>
      "Welcome to our fitness sanctuary, where sweat meets determination and
      goals become achievements. At our gym, we're not just about reps and
      routines; we're a community driven by passion, committed to sculpting
      bodies and minds. Whether you're a beginner or a seasoned athlete, our
      doors are open to guide, support, and empower you on your fitness
      journey. Contact us today and join a place where every drop of sweat
      counts towards your success."
    </p>
  </div>

  <div class="container">
    <div class="first">
      <div class="box">
        <div class="icon"><img src="map.png" alt="map" width="50px" /></div>
        <div class="text">
          Address: "London Bridge Cottons, Unit 7, Cottons Centre,<br />
          Tooley St, London SE1 2QG, United Kingdom."
        </div>
      </div>

      <div class="box">
        <div class="icon">
          <img src="phone.png" alt="phone" width="50px" />
        </div>
        <div class="text">Phone: 507-475-6094</div>
      </div>

      <div class="box">
        <div class="icon">
          <img src="envelope.jpg" alt="envelope" width="50px" />
        </div>
        <div class="text">Email: Death-Liftergym@gmail.com</div>
      </div>
    </div>

    <div class="contactForm">
      <form method="post" action="contactDatabase.php">
        <h2>Send message</h2>
        <div class="inputBox">
          <label for="emri">Full name</label><br />
          <input type="text" name="emri" required="required" />
        </div>
        <div class="inputBox">
          <label for="email">Email</label><br />
          <input type="email" name="email" required="required" />
        </div>
        <div class="inputBox">
          <span>Type your message:</span><br />
          <textarea required="required" name="message" autocomplete="none"></textarea>
        </div>
        <div class="inputBox">
          <input type="submit" class="Send" value="Send" style="color: black" />
        </div>
      </form>
    </div>
  </div>

  <?php

  include 'footer.php';

  ?>

</body>

</html>