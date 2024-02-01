<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="logo-removebg-preview.png" type="image/x-icon" />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    />
    <title>Death lifter</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
   
  <?php

    include "header.php";

    ?>

    <div class="background">
      <img
        src="pawel-bulwan-JWK2H-2qz1Y-unsplash.jpg"
        id="backgroundImage"
        alt="Background"
      />

      <h1 id="typewriter"></h1>

      <div class="buttoni">
        <div class="signup">
          <button
            type="button"
            id="signupSection"
            onclick="toggleRegisterForm()"
          >
            Sign Up
          </button>
        </div>
        <div class="signup-text">
          <p><a href="#" id="showLoginForm">Already have an account?</a></p>
        </div>
      </div>
    </div>

    <div class="overlay" id="overlay"></div>

    <div class="container" id="registerForm" style="display: none">
      <form id="form" action="UserRegistration.php" method="post">
        <h1>Join us today!</h1>
        <div class="input-control">
          <label for="username">Username</label>
          <input
            id="username"
            name="username"
            type="text"
            placeholder="Username should be unique"
          />
          <div class="error"></div>
        </div>
        <div class="input-control">
          <label for="email">Email</label>
          <input
            id="email"
            name="email"
            type="text"
            placeholder="Enter your email"
          />
          <div class="error"></div>
        </div>
        <div class="input-control">
          <label for="password">Password</label>
          <input
            id="password"
            name="password"
            type="password"
            placeholder="Atleast 8 characters"
          />
          <div class="error"></div>
        </div>
        <div class="input-control">
          <label for="password2">Password again</label>
          <input
            id="password2"
            name="password2"
            type="password"
            placeholder="Confirm your password"
          />
          <div class="error"></div>
        </div>
        <button id="submitButton">Sign Up</button>
      </form>
    </div>
    <br /><br />

    <span id="ourServices">Our Services</span>

    <div class="services">
      <div class="services1">
        <img
          src="qualityServices.png"
          alt="Quality Services"
          width="150px"
        /><br />
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

    <div class="container2" id="loginForm" style="display: none">
      <form id="Loginform" action="loginValidation.php" method="post">
        <h1>Log-in to your account</h1>
        <div class="input-control">
          <label for="username">Username</label>
          <input
            id="username2"
            name="usernameLogin"
            type="text"
            placeholder="Enter your username"
          />
          <div class="error" id="usernameError"></div>
        </div>

        <div class="input-control">
          <label for="password">Password</label>
          <input
            id="passwordL"
            name="passwordLogin"
            type="password"
            placeholder="Enter your password"
          />
          <div class="error" id="passwordError"></div>
        </div>
        <br />

        <button  id="submitButton2" name="submitButton2">Log in</button>
      </form>
    </div>

   <?php

    include "footer.php";

    ?>

    <script src="script.js"></script>
  </body>
</html>