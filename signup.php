<?php
session_start();

include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  //smth was posted
  $email = $_POST['email'];
  $password = $_POST['password'];
  $rptPassord = $_POST['repeatPassword'];

  $query = "SELECT * FROM users WHERE email='$email' ";
  $result = mysqli_query($con, $query);
  if (mysqli_num_rows($result) > 0){
    echo "<h1 style= 'color: white; text-align:center;'>  Acest email nu e disponibil! </h1> ";
  }
  else if (!empty($email) && !empty($password) && ($password === $rptPassord) && (strpos($email, "@"))) {

    $query = "INSERT INTO users (email, password) VALUES('$email','$password')";

    mysqli_query($con, $query);

    header("Location: login.php");
    die;
  } else {
    echo "<h1 style= 'color: white; text-align:center;'>  Introduceti informatia valida! </h1> ";
  }
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

  <title>Inregistrare</title>
</head>

<body>
  <div class="wrapper">
    <h2>Inregistrare</h2>
    <form id="myform" method="post">
      <div class="input_field">
        <input type="text" placeholder="E-mail" id="email" name="email">
      </div>
      <div class="input_field">
        <input type="password" placeholder="Password" id="password" name="password" style="
        width: 100%;
        border: 1px solid #e0e0e0;
        padding: 10px;">
      </div>
      <div class="input_field">
        <input type="password" placeholder="Repeat password" id="repeatPassword" name="repeatPassword" style="
        width: 100%;
        border: 1px solid #e0e0e0;
        padding: 10px;">
      </div>
      <div class="btn">
        <input type="submit" value="Register">
      </div>
    </form>
    <div class="container">Ai deja un cont? <a href="login.php">Logheaza-te!</a>
    </div>
  </div>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <!-- <script src="js/main.js"> </script> -->
</body>

</html>