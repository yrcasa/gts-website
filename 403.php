<?php

http_response_code(403);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>403 Forbidden | Global Tiger Solutions</title>
    <link rel="stylesheet" href="assets/css/style.css">
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
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">
            <!-- ======= Nav Menu Section ======= --> <?php include "navMenu.php"; ?>
        </div>
    </header><!-- End Header -->
    <main>
        <div class="error-container">
            <div class="logo-container">
                <img src="assets/img/undraw_Starry_window_re_0v82.svg" alt="403 Logo">
            </div>
            <h1 class="error-title">403 Forbidden</h1>
        </div>

    </main>
</body>

</html>