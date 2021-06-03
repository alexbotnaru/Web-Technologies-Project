<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);
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
              <a class="nav-link active" href="messages.php">Mesaje</a>
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
  <br>

  <?php
  //ALERT for delete button
  if (isset($_SESSION['message'])) {
  ?>
    <div class="alert alert-<?php echo $_SESSION['msg_type'] ?>">

      <?php
      echo $_SESSION['message'];
      unset($_SESSION['message']);
      ?>

    </div>
  <?php }
  ?>

  <section>

    <div class="container">
      <div class="row justify-content-center">
        <table class="table">
          <thead>
            <tr>
              <th>Messaj Id </th>
              <th>Nume</th>
              <th>Subiect</th>
              <th>Telefon</th>
              <th>Email</th>
              <th>Mesaj</th>
              <th colspan="2">Action</th>
            </tr>
          </thead>
          <?php
          $query = "SELECT message_id, nume, subiect, nr_tel, email, mesaj FROM messages";
          $result = mysqli_query($con, $query);
          while ($row = mysqli_fetch_assoc($result)) {
          ?>
            <tr>
              <td><?php echo $row['message_id']; ?></td>
              <td><?php echo $row['nume']; ?></td>
              <td><?php echo $row['subiect']; ?></td>
              <td><?php echo $row['nr_tel']; ?></td>
              <td><?php echo $row['email']; ?></td>
              <td><?php echo $row['mesaj']; ?></td>
              <td>
                <a href="editPage.php?edit=<?php echo $row['message_id']; ?>" class="btn btn-info" style="width:75px;">Edit</a>
                <a href="functions.php?delete=<?php echo $row['message_id']; ?>" class="btn btn-danger" style="width:75px;">Delete</a>
              </td>
            </tr>
          <?php } ?>

        </table>
      </div>


    </div>

    <div class="container">
      <div class="btn">
        <form method="post">
          <button type="submit" class="btn btn-dark " name="export">Export</button>
        </form>
      </div>
    </div>



  </section>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>