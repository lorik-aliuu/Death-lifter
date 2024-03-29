<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Death lifter</title>
    <link rel="icon" href="logo-removebg-preview.png" type="image/x-icon" />

    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }

        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: black;
            height: 65px;
        }

        .link ul {
            list-style: none;
            display: flex;
        }

        .link a {
            margin-right: 26px;
            text-decoration: none;
            color: white;
            font-size: 17px;
            font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande",
                "Lucida Sans", Arial, sans-serif;
            transition: all 0.2s;
            position: relative;
        }

        .link a::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: transparent;
            transform: scaleX(0);
            transform-origin: bottom right;
            transition: transform 0.3s ease;
        }

        .link a:hover::before {
            background-color: white;
            transform: scaleX(1);
            transform-origin: bottom left;
        }

        .link a:not(:last-child)::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: transparent;
            transform: scaleX(0);
            transform-origin: bottom right;
            transition: transform 0.3s ease;
        }

        .link a:hover::after {
            background-color: transparent;
            transform: scaleX(0);
        }

        .hm {
            display: none;
        }

        @media only screen and (max-width: 1360px) {
            .navbar {
                padding: 0 50px;
            }

            @media only screen and (max-width: 1200px) {
                .navbar {
                    padding: 0 30px;
                }

                @media only screen and (max-width: 900px) {
                    .hm {
                        display: block;
                        cursor: pointer;
                    }

                    .hm .line {
                        width: 30px;
                        height: 3px;
                        background: #fefefe;
                        margin: 6px 0;
                    }

                    .link {
                        height: 0;
                        position: absolute;
                        top: 50px;
                        left: 0;
                        right: 0;
                        width: 100vw;
                        background: black;
                        transition: 0.5s;
                        overflow: hidden;
                        z-index: 9999;
                    }

                    .link.active {
                        height: 450px;
                    }

                    .link ul {
                        display: block;
                        width: fit-content;
                        margin: 80px auto 0 auto;
                        text-align: center;
                        transition: 0.5s;
                        opacity: 0;
                    }

                    .link.active ul {
                        opacity: 1;
                    }

                    .link ul li a {
                        margin-bottom: 27px;
                        font-size: 25px;
                        font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
                    }
                }
    </style>
</head>

<body>
    <div class="navbar">
        <div class="logo">
            <img src="logo.jpg" alt="logo" width="54px" />
        </div>

        <div class="hm">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>

        <div class="link">
            <ul>
                <li><a href="index.php" id="homeLink">Home</a></li>
                <li><a href="about.php" id="aboutLink">About us</a></li>
                <li><a href="programs.php" id="programsLink">Programs</a></li>
                <li><a href="trainers.php" id="trainersLink">Trainers</a></li>
                <li><a href="contact.php">Contact us</a></li>
            </ul>
        </div>

    </div>





    <script>
        const hm = document.querySelector(".hm");

        hm.addEventListener("click", function () {
            const navbar = document.querySelector(".link");
            navbar.classList.toggle("active");
        });



    </script>
</body>

</html>