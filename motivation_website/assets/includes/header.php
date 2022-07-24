<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="./register.php">
    <link rel="stylesheet" href="./insert.php">
    <link rel="stylesheet" href="./update.php">
    <link rel="stylesheet" href="./delete.php">
</head>
<body>
    <!-- navbar section -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand text-light" href="home.html">World Of Determination</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="aboutus.php">AboutUs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="services.php">
                  Services
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- navbar section -->
    <!-- landingimage -->
    <section id="landingimage">
    <section id="form">
    <div class="container">
        <div class="row pt-5">
            <div class="text-center text-dark"><h3>REGISTER WITH US</h3></div>
            <div class="col-md-3"></div>
            <div class="col-md-6 bg-dark text-light">
                <form action="insert.php" class="border border-dark rounded text-light" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="" name="username">
                      </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary" name="insert">REGISTER</button>
                    <a href="fetch.php">View</a>
                  </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</section>
    </section>
    <!-- landingpage -->