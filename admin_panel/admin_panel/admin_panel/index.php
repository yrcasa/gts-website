<?php require_once("login.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Tiger Solutions</title>
    <link rel="icon" href="images/tcsdi_icon.ico">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Styles  -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>

<form class="form-signin" action="login.php" method="post">
  <div class="text-center mb-4">
    <!-- Image and Header  -->
    <img class="mb-4" src="images/gts.png" alt="" width="200" >
    <h1 class="h3 mb-3 font-weight-normal">Global Tiger Solutions</h1>
  
  </div>
    Username
  <div class="form-label-group">
    <input type="text" id="username" name="username" class="form-control" placeholder="Email address" required autofocus>
    <label for="username">Username</label>
  </div>

  <div class="form-label-group">
    <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
    <label for="password">Password</label>
  </div>

  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
    <input type="submit" name="login" id="login" class="btn btn-lg btn-primary btn-block" ></input>

  <?php 
  if(isset($_SESSION['auth-msg'])):?>

  <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
  <strong> 
            <?php 
                echo $_SESSION['auth-msg'];
                unset($_SESSION['auth-msg']);
                ?>
   </strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<?php endif; ?>

  <p class="mt-5 mb-3 text-muted text-center" id="since"></p>
</form>
  

    <!-- Scripts  -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="js/index.js"></script>
</body>
</html>