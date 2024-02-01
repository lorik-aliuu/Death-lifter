<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Trainers-Death-Lifter</title>
  <link rel="icon" href="logo-removebg-preview.png" type="image/x-icon" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
</head>
<style>
  * {
    margin: 0px;
    padding: 0px;
  }



  @media only screen and (max-width: 1200px) {


    .trainers {
      display: flex;
      justify-content: space-between;
    }

    .trainer1 {
      margin-left: 20px;
      box-shadow: 0px 0px 8px 0px rgba(255, 255, 255, 0.7);
    }
  }

  @media only screen and (max-width: 900px) {


    .trainers {
      display: flex;
      flex-direction: column !important;
      justify-content: center !important;
      align-items: center !important;
      overflow: hidden !important;
    }

    .trainer1 {
      margin: 0 auto 30px !important;
      margin-bottom: 30px;
      width: 300px !important;
      overflow: hidden !important;
    }

    .footer {
      display: flex;
      flex-direction: column;
      align-items: center;
      overflow: hidden !important;
    }


  }

  body {
    background-color: black;
  }

  .trainers {
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    padding: 20px;
    margin-top: 40px;
  }

  .container h1 {
    margin-top: 20px;
    color: #fefefe;
    text-align: center;
  }

  .trainer1 {
    height: 500px;
    width: 300px;
    border: 1px solid white;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px;
    border-radius: 24px;
    justify-content: space-evenly;
    box-shadow: 0px 0px 24px 0px rgba(255, 255, 255, 0.7);
  }

  .trainer1 h4 {
    font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
    font-weight: bold;
    color: white;
  }

  .trainer1 p {
    color: white;
  }

  .trainer1 button {
    margin-top: ;
    width: 100%;
    padding: 8px;
    color: black;
    font-weight: bold;
    font-size: 18px;
    border-radius: 23px;
  }

  .trainer1 button:hover {
    background-color: black;
    color: white;
    font-weight: bold;
    border: 1px solid white;
  }

  .foto {
    transition: transform 0.3s ease;
  }

  .foto:hover {
    transform: scale(1.1);
  }

  .trainer1 img {
    box-shadow: 0px 0px 10px 0px rgba(255, 255, 255, 0.5);
  }
</style>

<body>
  <?php

  include 'header.php';

  ?>

  <div class="container">
    <h1>MEET OUR TRAINERS</h1>
    <div class="trainers">
      <div class="trainer1">
        <img src="first-trainer.jpg" alt="" height="270px" width="230px" class="foto" />
        <h4>Marcus Chang</h4>
        <p>
          Meet Marcus Chang: Your fitness guide for a stronger, healthier you.
        </p>
        <button>Contact me</button>
      </div>
      <div class="trainer1">
        <img src="secondTrainer.jpg" alt="" height="270px" width="230px" class="foto" />
        <h4>Evelyn Hayes</h4>
        <p>
          Meet Evelyn Hayes. Passionate gym coach sculpting fitness journeys,
          empowering one step at a time
        </p>
        <button>Contact me</button>
      </div>
      <div class="trainer1">
        <img src="thirdTrainer.jpg" alt="" height="270px" width="230px" class="foto" />
        <h4>Nora Kim</h4>
        <p>
          Meet Nora Kim. Guiding fitness transformations, empowering strength,
          and vitality, one session at a time
        </p>
        <button>Contact me</button>
      </div>
    </div>
  </div>

  <?php

  include 'footer.php';

  ?>

</body>

</html>