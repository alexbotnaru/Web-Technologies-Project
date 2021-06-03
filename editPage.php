<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);
  
if (isset($_GET['edit'])) {
    $message_id = $_GET['edit'];
    $query = "SELECT * FROM messages where message_id = '$message_id' ";
    $result = mysqli_query($con, $query);

    $row = mysqli_fetch_assoc($result);
    $message_id = $row['message_id'];
    $nume = $row['nume'];
    $subiect = $row['subiect'];
    $nr_tel = $row['nr_tel'];
    $email = $row['email'];
    $mesaj = $row['mesaj'];
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
                            <a class="nav-link" href="contact.php">Contacteaza-ne</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="messages.php">Mesaje</a>
                        </li>
                        <a href="logout.php" class="btn btn-outline-success">Log Out</a>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="ex.Dacia" aria-label="Cauta">
                        <button class="btn btn-outline-success" type="submit">Cauta</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>


    <div class="container">
        <div class="wrapper" style="max-width:400px;">
            <h2>Editare</h2>
            <form id="myform" method="post">
                <input type="hidden" name="message_id" value="<?php echo $message_id; ?>">

                <div class="input_field form-group">
                    <input type="text" name="nume" placeholder="Nume" value="<?php echo $nume; ?>" id="name">
                </div>
                <div class="input_field form-group">
                    <input type="text" name="subiect" placeholder="Subiect" value="<?php echo $subiect; ?>" id="subject">
                </div>
                <div class="input_field form-group">
                    <input type="text" name="nr_tel" placeholder="Numar de telefon" value="<?php echo $nr_tel; ?>" id="phone">
                </div>
                <div class="input_field form-group">
                    <input type="text" name="email" placeholder="E-mail" value="<?php echo $email; ?>" id="email">
                </div>
                <div class="input_field form-group">
                    <input type="text" name="mesaj" placeholder="Mesaj" value="<?php echo $mesaj; ?>" id="mesaj">
                </div>
                <!-- 
    <div class="input_field form-group">
      <textarea id="mesaj" name="mesaj" placeholder="Mesaj" rows="3" cols="50" form="myform" value="<?php echo $mesaj; ?>" >
    </textarea>
    </div>
     CSS -->
                <div class="btn">
                    <button type="submit" class="btn btn-dark " name="update">Update</button>
                </div>
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>