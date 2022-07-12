<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:" . $name . "<" . $email . ">\r\n";

$recipient = "info@rezarastegar.ir";

mail($recipient, $subject, $message, $mailheader) or die("Error!");

echo '

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content="fa">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="./assets/images/en-logo.png">
    <!-- title -->
    <title>پیام شما ارسال شد</title>
    <!-- custom style -->
    <link rel="stylesheet" href="../styles/en-style.css">
    <!-- aos -->
    <link rel="stylesheet" href="./node_modules/aos/dist/aos.css">
</head>
<body>
    <header class="main-header">
        <div class="main-header-container container">
            <nav class="navbar container">
                <!-- image -->
                <div class="main-header__logo">
                    <a href="https://rezarastegar.ir/en"><img src="../assets/images/en-logo.png" class="nav-logo"
                            alt="reza rastegar logo"></a>
                </div>
                <!-- Desktop navbar list -->
                <ul class="list nav__list" id="sideba">
                    <li class="nav__item">
                        <a href="https://rezarastegar.ir/en">Home page</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Mobile toggle -->
    <div id="toggle"></div>
    <div id="sidebar">
        <ul>
            <a href="https://rezarastegar.ir/en">
                <li>Home page</li>
            </a>
        </ul>
    </div>

    
    <div id="particles-js"></div>

    <div class="submission container block">
        <h2>Thanks, your message was sent successfully. I will answer it soon</h2>
    <a href="https://rezarastegar.ir/en">
    <button>Home page</button>
   </a>  
    </div>

     <!-- Start Aos -->
    <script src="../node_modules/aos/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- End Aos -->

    <!-- Start Particles.js -->
    <script src="../node_modules/particles.js/particles.js"></script>
    <script src="../node_modules/particles.js/demo/js/app.js"></script>
    <script>
        particlesJS.load("particles-js", "assets/particles.json", function () {
            console.log("callback - particles-js config loaded");
        });
    </script>
    <!-- End Particles.js -->

    <!-- Start Main js -->
    <script src="../js/main.js"></script>
    <!-- End Main js -->

</body>
</html>

';
