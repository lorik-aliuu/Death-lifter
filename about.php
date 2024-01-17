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
    <title>About Us - Death lifter</title>
    <style>
     
      @media only screen and (max-width: 1360px) {
        .navbar {
          padding: 0 50px;
        }
      }



    
      .section {
        width: 100%;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        background-color: black;
      }

      .section .container {
        width: 80%;
        display: block;
        margin: 0 auto;
        padding: 50px 0px;
      }

      .container .title {
        width: 100%;
        text-align: center;
        margin-bottom: 50px;
      }

      .container .title h1 {
        text-transform: uppercase;
        font-size: 35px;
        color: white;
      }

      .container .title h1::after {
        content: "";
        width: 180px;
        height: 5px;
        margin: auto;
        color: white;
        background-color: whitesmoke;
        display: block;
      }

      .content {
        float: left;
        width: 55%;
      }

      .image-section {
        width: 40%;
        float: right;
      }

      .image-section img {
        width: 100%;
        height: auto;
      }

      .content .article h3 {
        color: white;
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        letter-spacing: 0.8px;
        font-size: 19px;
      }

      .content .article p {
        margin-top: 20px;
        font-size: 17px;
        line-height: 1.5;
        color: whitesmoke;
      }

      .content .article .button {
        margin-top: 50px;
      }

      .content .article .button a {
        text-decoration: none;
        padding: 8px 25px;
        background-color: whitesmoke;
        border-radius: 40px;
        color: black;
        font-size: 18px;
        letter-spacing: 1.5px;
      }

      .content .article .button a:hover {
        color: white;
        background-color: black;
        transition: 3s ease;
        font-weight: bold;
      }

      .container .social {
        width: 100%;
        clear: both;
        margin-top: 50px;
        text-align: center;
        display: inline-block;
      }

      .container .social i {
        color: black;
        font-size: 22px;
        height: 45px;
        width: 45px;
        background-color: white;
        border: 2px solid black;
        border-radius: 50%;
        align-items: center;
        line-height: 45px;
        text-align: center;
        margin-top: 0 10px;
      }

      .container .social i:hover {
        color: cornflowerblue;
        background-color: darkgray;
        transition: 1s ease;
        transform: rotate(360deg);
      }

      @media screen and (max-width: 768px) {
        .section .container {
          width: 80%;
          display: block;
          margin: auto;
        }

        .content {
          float: none;
          width: 100%;
          display: block;
          margin: auto;
        }

        .image-section {
          float: none;
          width: 100%;
          margin-top: 50px;
        }

        .image-section img {
          width: 100%;
          height: auto;
          display: block;
          margin: auto;
        }

        .container .title h1 {
          text-align: center;
          font-size: 30px;
        }

        .container .article .button {
          text-align: center;
        }

        .container .article .button a {
          padding: 6px 15px;
          font-size: 16px;
        }

       
    </style>
  </head>

  <body>
    <?php

    include 'header.php';

    ?>

    <div class="section">
      <div class="container">
        <div class="title">
          <h1>About Us</h1>
        </div>
        <div class="content">
          <div class="article">
            <h3>At Death Lifter, we're more than just a gym</h3>
            <p>
              Our state-of-the-art facility boasts cutting-edge equipment,
              expert trainers, and a diverse range of fitness classes to cater
              to your unique needs. What sets us apart is not just the equipment
              but the people — a passionate team of certified trainers and a
              vibrant community of members who share the same goal: to lead a
              healthier, more active life. Whether you're a seasoned fitness
              enthusiast or just starting your journey, our personalized
              approach ensures that you receive the guidance and support needed
              to achieve your goals. Beyond physical fitness, we offer wellness
              services, nutritional guidance, and a variety of amenities to
              nurture your overall well-being.
            </p>

            <div class="button">
              <a href="#">Read More</a>
            </div>
          </div>
        </div>

        <div class="image-section">
          <img src="Image.jpg" alt="PICK" />
        </div>

     <?php

     include 'footer.php';

     ?>
  </body>
</html>
