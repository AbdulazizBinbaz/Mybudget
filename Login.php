
<?php

session_start();
?>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    
    <title>Sign in</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
    <link href="css/styles.css" rel="stylesheet" />
    <!-- Favicons -->

<meta name="theme-color" content="#7952b3">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a style = "font-family:copperplate, papyrus, fantasy; color:yellow;" class="navbar-brand" href="Home.php">iBlog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="Home.php">Home</a></li></ul>
</nav>
<div style="width: 50%; height: 50%; border: none; position: relative; right: -23%; bottom:-20%; ">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
<?php
    
    if(isset($_SESSION['done'])){ ?>
      <div class="alert alert-success" role="alert"> <?php
        echo $_SESSION['done'];
        
        session_destroy();
        ?> 
      </div> 
      <?php
    }
    elseif(isset($_SESSION['r'])){ ?>
      <div class="alert alert-danger" role="alert"> <?php
      echo $_SESSION['r'];
      session_destroy();
      ?>
     </div> 
     <?php
    } ?>
  <form action="Loginp.php" method="post">
    <h1 class="h1 mb-3 fw-normal">SIGN IN</h1>
    <br>
    <div class="form-floating">
      <input type="text" class="form-control" name="username" placeholder="" required>
      <label for="floatingInput">Username</label>
    </div>
    <br>
    <div class="form-floating">
      <input type="password" class="form-control" name="pass" placeholder="" required>
      <label for="floatingPassword">Password</label>
    </div>
    <br>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <br><br>
    <p>Don't have an account?</p>
    <p>  <a  class="w-100 btn btn-lg btn-primary" href="Register.php">Register</a></p>
    <p class="mt-5 mb-3 text-muted">&copy; 2022–2022</p>
  </form>
</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">&copy; Copyright iBlog Since 2022</p></div>
        </footer>
</main>


    
  </body>
</html>
