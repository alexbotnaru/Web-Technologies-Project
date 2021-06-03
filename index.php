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
              <a class="nav-link" href="messages.php">Mesaje</a>
            </li>
            <a href="logout.php" class="btn btn-outline-success" >Log Out</a>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="ex.Dacia" aria-label="Cauta">
            <button class="btn btn-outline-success" type="submit">Cauta</button>
          </form>
        </div>
      </div>
    </nav>
  </header>

  <div id="headerwrap">
    <div class="container">
      <div class="row">
        <h4>Cele mai bune oferte</h4>
        <h1>sunt la noi</h1>
      </div>
    </div>
  </div>

  <section>
    <div class="container">
      <h2>Noile oferte</h2>

      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row justify-content-between">
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card ">
                  <img src="https://i.simpalsmedia.com/999.md/BoardImages/900x900/6ea156cdc89ea309767152863f7785f3.jpg" class="card-img-top" alt="Renault Megane">
                  <div class="card-body">
                    <h5 class="card-title">Renault Megane</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Detalii</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card">
                  <img src="https://i.simpalsmedia.com/999.md/BoardImages/900x900/dfef92cad40c214cadeaf22bbf55f548.jpg" class="card-img-top" alt="BMW 5 series">
                  <div class="card-body">
                    <h5 class="card-title">BMW 5 Series</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Detalii</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card ">
                  <img src="https://i.simpalsmedia.com/999.md/BoardImages/900x900/136ff6bda012870ceef453771c81423c.jpg" class="card-img-top" alt="Opel Astra">
                  <div class="card-body">
                    <h5 class="card-title">Opel Astra</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Detalii</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card ">
                  <img src="https://i.simpalsmedia.com/999.md/BoardImages/900x900/c05cb865a0fe16b97f21e594a9cd3500.jpg" class="card-img-top" alt="Mercedes E Class">
                  <div class="card-body">
                    <h5 class="card-title">Mercedes E Class</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="cars/mercedes_e_class.html" class="btn btn-primary">Detalii</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row justify-content-between">
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card ">
                  <img src="https://i.simpalsmedia.com/999.md/BoardImages/900x900/dfef92cad40c214cadeaf22bbf55f548.jpg" class="card-img-top" alt="BMW 5 series">
                  <div class="card-body">
                    <h5 class="card-title">BMW 5 Series</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Detalii</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card ">
                  <img src="https://i.simpalsmedia.com/999.md/BoardImages/900x900/136ff6bda012870ceef453771c81423c.jpg" class="card-img-top" alt="Opel Astra">
                  <div class="card-body">
                    <h5 class="card-title">Opel Astra</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Detalii</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card ">
                  <img src="https://i.simpalsmedia.com/999.md/BoardImages/900x900/c05cb865a0fe16b97f21e594a9cd3500.jpg" class="card-img-top" alt="Mercedes E Class">
                  <div class="card-body">
                    <h5 class="card-title">Mercedes E Class</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="cars/mercedes_e_class.html" class="btn btn-primary">Detalii</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card ">
                  <img src="https://i.simpalsmedia.com/999.md/BoardImages/900x900/c05a077390a8fe2a84c616cd5ccde4c5.jpg" class="card-img-top" alt="Dacia Duster">
                  <div class="card-body">
                    <h5 class="card-title">Dacia Duster</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Detalii</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row justify-content-between">
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card">
                  <img src="https://i.simpalsmedia.com/999.md/BoardImages/900x900/136ff6bda012870ceef453771c81423c.jpg" class="card-img-top" alt="Opel Astra">
                  <div class="card-body">
                    <h5 class="card-title">Opel Astra</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Detalii</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card ">
                  <img src="https://i.simpalsmedia.com/999.md/BoardImages/900x900/c05cb865a0fe16b97f21e594a9cd3500.jpg" class="card-img-top" alt="Mercedes E Class">
                  <div class="card-body">
                    <h5 class="card-title">Mercedes E Class</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="cars/mercedes_e_class.html" class="btn btn-primary">Detalii</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card ">
                  <img src="https://i.simpalsmedia.com/999.md/BoardImages/900x900/c05a077390a8fe2a84c616cd5ccde4c5.jpg" class="card-img-top" alt="Dacia Duster">
                  <div class="card-body">
                    <h5 class="card-title">Dacia Duster</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Detalii</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card">
                  <img src="https://i.simpalsmedia.com/999.md/BoardImages/900x900/eaaccac1f9f67d856c89284c92da9ce3.jpg" class="card-img-top" alt="Nissan Qashqai">
                  <div class="card-body">
                    <h5 class="card-title">Nissan Qashqai</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Detalii</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </section>

  <div class="container">
    <h2>Unde ne poti gasi</h2>
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5438.166880514909!2d28.77167042444051!3d47.03859346533409!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40cbd61c67e94d33%3A0x2130794eb5784922!2zUGlhyJthIOKAnkRlbGZpbuKAnSwgQWxiYSBJdWxpYSBTdHIuIDE5OCwgQ2hpyJlpbsSDdSwgTW9sZG92YQ!5e0!3m2!1sen!2s!4v1617298050613!5m2!1sen!2s"
      width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </div>


  <div class="footer">
    <div class="container-footer">
      <div class="row">
        <div class="footer-col">
          <h4>Compania noastra</h4>
          <ul>
            <li><a href="#">Despre noi</a></li>
            <li><a href="#">Serviciile noastre</a></li>
            <li><a href="#">Politica de confidențialitate</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Urmareste-ne</h4>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>
