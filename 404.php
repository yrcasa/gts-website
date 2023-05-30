<?php

http_response_code(404);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found | Global Tiger Solutions</title>
    <link rel="stylesheet" href="assets/css/products-style.css">
    <?php include "links.php" ?>
    <style>
        .logo-container {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .logo-container img {
            height: 200px;
            margin-right: 10px;
        }

        .error-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            min-height: 100vh;
            background-color: #f5f5f5;
        }

        .error-title {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .error-text {
            font-size: 24px;
            margin-bottom: 40px;
        }
    </style>
</head>

<body>
    <header id="header" class="fixed-top d-flex align-items-center header-transparent ">
        <div class="container d-flex align-items-center">
            <div class="logo mr-auto">
                <h1 class="text-light">
                    <!-- <a href="index.html">GTS</a> -->
                    <a href="index.php"><img src="assets/img/gtslogo.png" alt="" class="img-fluid"></a>
                </h1>
                <!-- Uncomment below if you prefer to use an image logo -->
            </div>
            <!-- ======= Nav Menu Section ======= --> <?php include "navMenu.php"; ?>
        </div>
    </header><!-- End Header -->
    <main>
        <div class="error-container">
            <div class="logo-container">
                <img src="assets/img/404.svg" alt="Logo">
            </div>
            <h1 class="error-title">404 Not Found</h1>
        <p class="error-text">The page you are looking for could not be found.</p>
        </div>
        
    </main>
</body>

</html>