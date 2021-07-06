<?php
session_start();
if(!isset($_SESSION['loggedin'])){

    header('location: login.php');
}


?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>WELCOME
    <?php echo $_SESSION['name']; ?>
  </title>
</head>

<body>
  <?php
    require 'components/nav.php'; 
    ?>

  <div class="container">
    <div class="alert alert-success my-4" role="alert">
      <h4 class="alert-heading">WELCOME <?php echo $_SESSION['name']; ?></h4>
      <p>Hi ! You have landed on the website which is created by JAskaran and This is the my first php form which I 
        created you can sign up, login and logout here. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut iste fuga excepturi labore consequuntur sequi nemo ratione cupiditate ut aspernatur, libero inventore distinctio tenetur velit? Inventore earum itaque unde! Repellendus!
      </p>
      <hr>
      <p class="mb-0">If you want to logout then use this :-<a href="logout.php">Logout</a> </p>
    </div>

  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>