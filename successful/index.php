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
<html lang="fa-IR" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content="fa">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="icon" href="../assets/images/logo.ico">
    <!-- title -->
    <title>پیام شما ارسال شد</title>
    <!-- custom style -->
    <link rel="stylesheet" href="../styles/fa-style.css">
    <!-- aos -->
    <link rel="stylesheet" href="./node_modules/aos/dist/aos.css">
</head>
<body>
    <header class="main-header">
        <div class="main-header-container container">
            <nav class="navbar container">
                <!-- image -->
                <div class="main-header__logo">
                    <a href="https://rezarastegar.ir/"><img src="../assets/images/logo.png" class="nav-logo"
                            alt="عکس لوگو رضا رستگار"></a>
                </div>
                <!-- Desktop navbar list -->
                <ul class="list nav__list" id="sideba">
                    <li class="nav__item"><a href="https://rezarastegar.ir">صفحه اصلی</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Mobile toggle -->
    <div id="toggle"></div>
    <div id="sidebar">
        <ul>
            <a href="https://rezarastegar.ir">
                <li>صفحه اصلی</li>
            </a>
        </ul>
    </div>

    
    <div id="particles-js"></div>

    <div class="submission container block">
            <h2>باتشکر، پیام شما با موفقیت ارسال گردید. به زودی به آن پاسخ خواهیم داد</h2>
            <a href="https://rezarastegar.ir">
                <button>صفحه اصلی</button>
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
