<?php
session_start();




if ($_SESSION['user']['role'] == 1) {

  header("Location: admin.php");
  exit();
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="logo-removebg-preview.png" type="image/x-icon" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  <title>Death lifter</title>

</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Pacifico&display=swap');

  * {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
  }

  @media only screen and (max-width: 1360px) {


    .background h1 {
      top: 35% !important;
      font-size: 55px !important;
    }

    .services1,
    .services2,
    .services3,
    .services4 {
      margin-right: 15px !important;
    }

  }

  @media only screen and (max-width: 1200px) {


    .background h1 {
      font-size: 45px !important;
    }

    .services {
      margin: 5px 170px 10px 170px !important;
    }

    .services1,
    .services2,
    .services3,
    .services4 {
      margin-top: 30px;
    }
  }


  @media only screen and (max-width: 900px) {

    .background h1 {
      font-size: 35px !important;
    }

    .services {
      flex-direction: column;
      margin: 5px 70px 10px 70px !important;
    }

    .services1,
    .services2,
    .services3,
    .services4 {
      margin-top: 30px;
    }


  }

  .background img {
    width: 100%;
    height: 100vh;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
    background-size: cover;
    object-fit: cover;
    position: relative;
    cursor: pointer;
  }

  .background p {
    position: absolute;
    top: 50%;
    left: 77%;
    transform: translate(-46%, -46%);
    color: black;
    padding-bottom: 500px;
    font-size: 30px;
  }

  .background h1 {
    text-align: center;
    position: absolute;
    top: 35%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    font-size: 65px;
    font-weight: bold;
    font-family: "Arial", sans-serif;
    text-shadow: 2px 2px 15px rgba(0, 0, 0, 0.7);
    transition: transform 0.3s ease;
  }

  .background h1:hover {
    transform: translate(-50%, -50%) scale(1.05);
  }

  .services {
    text-align: center;
    display: flex;
    justify-content: space-evenly;
  }

  span {
    margin-bottom: 25px;
    display: flex;
    font-size: 30px;
    justify-content: center;
    font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
  }

  .services1,
  .services2,
  .services3,
  .services4 {
    text-align: center;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 1);
    padding: 17px;
  }

  .image-slider {
    margin-top: 40px;
    min-height: 30em;
    height: 100vh;
    position: relative;
    background-image: url(photo1slider.png);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    transition: 0.3s;
    overflow: hidden;
    margin-bottom: 50px;
  }

  .image-slider * {
    box-sizing: border-box;
  }

  .caption {
    background: linear-gradient(rgba(0, 0, 0, 0.1), white);
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    padding: 4em 1em 2em 1em;
    text-align: center;
  }

  .caption h1 {
    margin: 0;
    color: #fff;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
  }

  .caption p {
    color: #8a8a8a;
    font-weight: bold;
  }

  .arrow-left,
  .arrow-right {
    background: #fff;
    position: absolute;
    top: 40%;
    width: 3em;
    height: 3em;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    transition: 0.3s;
  }

  .arrow-left:hover,
  .arrow-right:hover {
    background: #000;
    color: #fff;
  }

  .arrow-left {
    left: 1em;
  }

  .arrow-right {
    right: 1em;
  }

  .image-fade {
    animation: imgFade 0.5s ease-in-out;
  }

  @keyframes imgFade {
    0% {
      opacity: 0;
    }

    100% {
      opacity: 1;
    }
  }

  .welcomeH1 {
    margin-top: 130px;
    font-family: 'Black Ops One', system-ui !important;
    color: whitesmoke !important;


  }

  .logOut {
    z-index: 9999;
    position: absolute;
    top: 20px;
    margin-left: 100px;
  }

  .logOut a {
    text-decoration: none;
    color: black;
    background-color: white;
    padding: 6px;
    font-weight: bold;
    font-size: 14px;
    border: 1px solid black;
    border-radius: 12px;
  }

  a:hover {
    background-color: black;
    color: white;
  }
</style>

<body>


  <?php

  include "header.php";

  ?>


  <div class="background">
    <img src="pawel-bulwan-JWK2H-2qz1Y-unsplash.jpg" id="backgroundImage" alt="Background" />

    <h1 id="typewriter"></h1>

    <h1 class="welcomeH1">Welcome,
      <?php echo htmlspecialchars($_SESSION['user']['username']); ?>!
    </h1>

    <div class="logOut">
      <a href="index.php">Log Out</a>
    </div>
  </div>


  <br /><br />

  <span id="ourServices">Our Services</span>

  <div class="services">
    <div class="services1">
      <img src="qualityServices.png" alt="Quality Services" width="150px" /><br />
      <h2>Quality Services</h2>
      <br />
      <p>
        At our gym studio, you can<br />
        experience the best level of<br />
        customer service
      </p>
    </div>

    <div class="services2">
      <img src="spaciousGym.png" alt="Spacious Gym" width="150px" /><br />
      <h2>Spacious Gym</h2>
      <br />
      <p>
        Our gym has enough place for all<br />
        kinds of workouts and a<br />
        wide variety of equipment.
      </p>
    </div>

    <div class="services3">
      <img src="programs.png" alt="Programs" width="150px" /><br />
      <h2>Fitness Programs</h2>
      <br />
      <p>
        Our coaches has developed more<br />
        than 50 programs and<br />
        workouts for you
      </p>
    </div>

    <div class="services4">
      <img src="group.jpg" alt="group" width="150px" /><br />
      <h2>Group Classes</h2>
      <br />
      <p>
        If you prefer training with <br />friends then our group classes
        have<br />
        all what u need
      </p>
    </div>
  </div>

  <section class="image-slider">
    <div class="arrow-left">
      <i class="fas fa-arrow-left"></i>
    </div>
    <div class="arrow-right">
      <i class="fas fa-arrow-right"></i>
    </div>
    <div class="caption">
      <h1>Death Lifter</h1>
      <p>Your Only Limit is You.</p>
    </div>
  </section>


  <?php

  include "footer.php";

  ?>

  <script>
    const textToType = "Your only limit is you.";

    function typeWriter(text, index) {
      if (index < text.length) {
        typewriter.innerHTML += text.charAt(index);
        index++;
        setTimeout(() => {
          typeWriter(text, index);
        }, 95);
      }
    }

    window.onload = function () {
      typeWriter(textToType, 0);
    };

    let homeClicked = false;

    function handleClick() {
      if (homeClicked) {
        location.reload();
      } else {
        homeClicked = true;
      }
    }

    const slider = document.querySelector(".image-slider");
    const arrowLeft = document.querySelector(".arrow-left");
    const arrowRight = document.querySelector(".arrow-right");
    const heading = document.querySelector(".caption h1");
    const description = document.querySelector(".caption p");

    const headings = "Death Lifter";
    const descriptions = [
      "Your Only Limit is You",
      "Train insane or remain the same",
      "Embrace the pain to witness the change.",
    ];

    const images = ["photo1slider.png", "p2.avif", "p3.avif"];

    let id = 0;

    function slide(id) {
      slider.style.backgroundImage = `url(${images[id]})`;
      heading.textContent = headings;
      description.textContent = descriptions[id];
    }

    function initializeSlider() {
      slide(id);
    }

    arrowLeft.addEventListener("click", () => {
      id--;

      if (id < 0) {
        id = images.length - 1;
      }
      slide(id);
    });

    arrowRight.addEventListener("click", () => {
      id++;

      if (id > images.length - 1) {
        id = 0;
      }
      slide(id);
    });




  </script>