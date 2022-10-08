<?php
session_start();


?>

<html lang="en">

<head>
  <meta charset="utf-8">

  <title>Register</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">



  <!-- Bootstrap core CSS -->
  <link href="css/styles.css" rel="stylesheet" />
  <!-- Favicons -->

  <meta name="theme-color" content="#7952b3">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a style = "font-family:copperplate, papyrus, fantasy; color:yellow;" class="navbar-brand" href="Home.php">iBlog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
          class="navbar-toggler-icon"></span></button>
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
    if(isset($_SESSION[ 'wrong' ])){ ?>
      <div class="alert alert-danger" role="alert"> <?php
        echo $_SESSION[ 'wrong' ];
        ?> </div> <?php
    }
    session_destroy();?>

      <h1 class="h1 mb-3 fw-normal">Register</h1>
      <br>
    <form action="Registerp.php" method="post">
      <div class="form-floating">
    
        
          <ul>
            <li style="display: inline;"><label> <input class="form-check-input" type="radio" name="account"  id="user" value="User" checked>Register as User</label></li> <br>
            <li style="display: inline;"> <label><input class="form-check-input" type="radio" name="account"  id="Blogger" value="Blogger">Register as Blogger</label> </li>
        
        </ul>
      </div>
      <br>

      <div class="form-floating">
        <input required type="text" class="form-control" name="usern" placeholder="">
        <label for="floatingInput">Username</label>
      </div>
      <br>
      <div class="form-floating">
        <input required type="email" class="form-control" name="email" placeholder="">
        <label for="floatingInput">Email Address</label>
      </div>
      <br>
      <div class="form-floating">
        <input required type="password" class="form-control" name="pass" placeholder="">
        <label for="floatingPassword">Password</label>
      </div>
      <br>
      <div class="form-floating">
        <input required type="password" class="form-control" name="pass2" placeholder="">
        <label for="floatingPassword">Check Password</label>
      </div>
      
      <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
  </form>
    <br>
    <p> <a href="Login.php">Already have an account?</a></p>
    <p class="mt-5 mb-3 text-muted">&copy; 2022–2022</p>
    
    </div><br><br<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">&copy; Copyright iBlog Since 2022</p></div>
        </footer>
  </main>



</body>

</html>