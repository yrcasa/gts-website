<?php 
include("../connect.php");
include("../auth.php");

$id = $_SESSION['SESS_MEMBER_ID'];
$qry = "SELECT * FROM access WHERE id='$id' ";
$result = mysqli_query($mysqli,$qry);

while($row = mysqli_fetch_array($result)){
    $nameofuser = $row['name'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Tiger Solutions</title>
    <link rel="icon" href="../images/tcsdi_icon.ico">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Styles  -->
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <!-- Navbar Header  -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand">
      <!-- Name of the User will be here  -->
      <?php echo $nameofuser; ?>
      
    </a>
  <!-- Toggler  -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">

    
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item" id="logout">
        <a class="nav-link" href="controller/logout.php" onclick="return confirm('Are you sure you want to Logout?')">Logout</span></a>
      </li>
    
      
      </li>
    </ul>
  </div>
</nav>
    <!-- Side Bar  -->
<div class="container-fluid">
    <div class="row">

        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <!-- Item 1   -->
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                        Home <span class="sr-only">(current)</span>
                        </a>
                    </li>  
                    

                    <!-- Logout  -->
                    <li class="nav-item" id="logout">
                        <a class="nav-link" href="controller/logout.php" onclick="return confirm('Are you sure you want to Logout?')">
                        Logout 
                        </a>
                    </li>  

                </ul>
            </div>
        </nav>

    <!-- Content  -->
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                </div>

                
            </div>
      </div>
    </main>


    </div>
</div>


    


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>