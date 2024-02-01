<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Programs-Death-Lifter</title>
  <link rel="icon" href="logo-removebg-preview.png" type="image/x-icon" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  <style>
    * {
      margin: 0px;
      padding: 0px;
    }

    @media only screen and (max-width: 1360px) {

      .programs {
        display: flex !important;
        justify-content: space-evenly !important;
        flex-wrap: wrap !important;
      }
    }



    @media only screen and (max-width: 900px) {

      .programs {
        display: flex;
        flex-direction: column;
        align-items: center !important;
        justify-content: center !important;
        justify-content: space-evenly;
      }

      .programs_section {
        margin: 0 auto 10px !important;
        width: 300px !important;
      }

      .foto {
        width: 250px !important;
      }


    }

    body {
      background-color: black;
    }

    .container {
      overflow: hidden;
    }

    .programs_section {
      width: 360px;
      border: 1px solid white;
      height: 550px;
      display: flex;
      flex-direction: column;
      align-items: start;
      padding: 30px;
      margin: 10px;
      box-shadow: 0px 0px 24px 0px rgba(255, 255, 255, 0.7);
      border-radius: 14px;
    }

    .programs {
      display: flex;
      padding: 40px;
      justify-content: space-evenly;
    }

    .programs_section p {
      font-size: 18px;
      margin-top: 15px;
      color: white;
    }

    .programs_section h3 {
      font-size: 22px;
      margin-top: 8px;
      color: white;
    }

    .programs_section button {
      width: 100%;
      margin-top: 25px;
      height: 40px;
      font-size: 17px;
      font-weight: bold;
      border-radius: 12px;
    }

    .programs_section button:hover {
      background-color: black;
      color: white;
      font-size: 17px;
      font-weight: bold;
      border: 1px solid white;
    }

    .titulli {
      color: white;
      text-align: center;
    }

    .programs_section img {
      box-shadow: 0px 0px 10px 0px rgba(255, 255, 255, 0.5);
    }

    .foto {
      width: 300px;
      transition: transform 0.3s ease;
    }

    .foto:hover {
      transform: scale(1.1);
    }
  </style>
</head>

<body>

  <?php

  include 'header.php';

  ?>

  <h1 class="titulli">OUR PROGRAMS</h1>
  <div class="container">
    <div class="programs">
      <div class="programs_section">
        <img src="programs1.webp" alt="" width="360px" class="foto" />
        <h3>8 WEEK MASS BUILDING WORKOUT FOR BEGINNERS</h3>
        <p>
          This 4 day workout will help you stretch sleeves, build mass, and
          bump up that number on the scale. You'll also learn about proper
          nutrition for your mass building goals.
        </p>
        <button>View Workout</button>
      </div>
      <div class="programs_section">
        <img src="programs2.webp" alt="" width="360px" class="foto" />
        <h3>3 DAY FULL BODY WOMEN'S DUMBBELL ONLY WORKOUT</h3>
        <p>
          Transform yourself in as little as 45 minutes! This 8-week full body
          workout routine is designed for women who want to tone their bodies
          while growing their glutes.
        </p>
        <button>View Workout</button>
      </div>
      <div class="programs_section">
        <img src="programs3.webp" alt="" width="360px" class="foto" />
        <h3>8 WEEK STRENGTH BUILDING WORKOUT FOR BEGINNERS</h3>
        <p>
          Build total body strength with this 5-day strength-building program!
          You’re going to train five days a week and should be in and out of
          the gym in less than an hour.
        </p>
        <button>View Workout</button>
      </div>
    </div>
  </div>

  <?php

  include 'footer.php';

  ?>
</body>

</html>