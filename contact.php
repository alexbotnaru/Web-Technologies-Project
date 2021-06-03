<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $nume = $_POST['nume'];
  $subiect = $_POST['subiect'];
  $nr_tel = $_POST['nr_tel'];
  $email = $_POST['email'];
  $mesaj = $_POST['mesaj'];


  $query = "INSERT INTO messages(nume,subiect,nr_tel,email,mesaj) 
               VALUES ('$nume', '$subiect', '$nr_tel', '$email', '$mesaj');";

  mysqli_query($con, $query);
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/contact_style.css">

  <title>Expert-Auto</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-xxl">
        <a class="navbar-brand" href="index.php">Expert-Auto</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="promotions.php">Promotii</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categorii
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Hatchback</a></li>
                <li><a class="dropdown-item" href="#">Sedan</a></li>
                <li><a class="dropdown-item" href="#">Van</a></li>
                <li><a class="dropdown-item" href="#">Coupe</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Remorci</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Contacteaza-ne</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="messages.php">Mesaje</a>
            </li>
            <a href="logout.php" class="btn btn-outline-success">Log Out</a>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Cauta" aria-label="Cauta">
            <button class="btn btn-outline-success" type="submit">Cauta</button>
          </form>
        </div>
      </div>
    </nav>
  </header>
  <br>

  <div class="wrapper">
    <h2>Contacteaza-ne</h2>
    <form id="myform" method="post" onsubmit="return validation()">
      <div class="input_field">
        <input type="text" name="nume" placeholder="Nume" id="name">
      </div>
      <div class="input_field">
        <input type="text" name="subiect" placeholder="Subiect" id="subject">
      </div>
      <div class="input_field">
        <input type="text" name="nr_tel" placeholder="Numar de telefon" id="phone">
      </div>
      <div class="input_field">
        <input type="text" name="email" placeholder="E-mail" id="email">
      </div>
      <div class="input_field">
        <textarea id="message" name="mesaj" placeholder="Mesaj"></textarea>
      </div>
      <div class="btn">
        <input type="submit">
      </div>
    </form>
    <div id="clock">
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="js/main.js"> </script>
</body>

</html>