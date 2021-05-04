<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>
<body>
<!-- <header class="nav">
        <span>
            <img src="image/icon.png">
            </span>
        <span class="bold">Healthy living</span>
        <div style="float:right">
            <button><a class="link" href="login.php">login</a></button>
            <button><a class="link" href="signup.php">signup</a></button>
       </div>
    </header> -->
    <ul>
      <li><img src="image/icon.png"></li>
      <li>Healthy life</li>
      <li style="float:right"><a href="signup.php">Signup</a></li>
      <li style="float:right"><a href="login.php">Login</a></li>
    </ul>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="image/health1.jpg" class="d-block w-100" style="width:100vw;height:60vh;opacity:0.7" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Health is Wealth</h5>
              <p>Our aim is to help you to be healthy and be a better version of yourself.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="image/health4.jpg" class="d-block w-100" style="width:100vw;height:60vh;opacity:0.7" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Health is Wealth</h5>
              <p>Our aim is to help you to be healthy and be a better version of yourself.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="image/health5.jpg" class="d-block w-100" style="width:100vw;height:60vh;opacity:0.7" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Health is Wealth</h5>
              <p>vOur aim is to help you to be healthy and be a better version of yourself.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <br>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card">
            <img src="image/fit.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Regular exercise</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="image/fit2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">yoga and fitness</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="image/card.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Diets and Nutrition</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
            </div>
          </div>
        </div>
      
</body>
</html>