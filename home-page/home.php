<?php 
  $cn = new mysqli(
    "localhost",
    "root",
    "",
    "southeast"
  );
  $name = $_POST['txt-title'];
  $description = $_POST['txt-description']; 
  $sql = "INSERT INTO tbl_test VALUES(null,'$name','$description' )";
  $cn->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="index.css">
</head>
<body>
                                            <!-- Nav -->
        <nav class="navbar" style="background-color: #45e610;">
            <div class="container">
                <a class="navbar-brand" href="#">
                <img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Bootstrap" width="30" height="24">
                </a>
                <nav class="navbar navbar-expand-lg bg-body-tertiary " >
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown link
                  </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
            </div>
        </nav>
                                             <!-- slideshow -->
                                             <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
  <div class="carousel-inner">
    <div class="carousel-item active c-items"> 
      <img src="https://th.bing.com/th/id/R.8ee912a14c7113bf347e1e3fe5e27367?rik=Qhu1jajA5sDbCA&riu=http%3a%2f%2fimages6.fanpop.com%2fimage%2fphotos%2f34600000%2fLuffy-3-monkey-d-luffy-34627033-1920-1080.jpg&ehk=yh%2fdEuJFLhfmy28h50wGrDNzjyvN0TDzE%2b7zumAO4QU%3d&risl=&pid=ImgRaw&r=0" class="d-block w-100 c-img" alt="slide 1">
    </div>
    <div class="carousel-item c-items">
      <img src="https://th.bing.com/th/id/R.567c6c78025a0431b359fbdf0a7957ba?rik=W1bcDo%2fpKKDEJQ&riu=http%3a%2f%2fimages5.fanpop.com%2fimage%2fphotos%2f25700000%2fLuffy-one-piece-25736835-1920-1080.jpg&ehk=EV2zTzkjA0zzHzbPn6attpzCT3vGThrgH%2bV8o1gFNqQ%3d&risl=&pid=ImgRaw&r=0" class="d-block w-100 c-img" alt="slide 2">
    </div>
    <div class="carousel-item c-items">
      <img src="https://th.bing.com/th/id/R.3d9b9c939864855fa3fc3be8aad3e89e?rik=7cwT7zikuIm2YQ&riu=http%3a%2f%2fs2.narvii.com%2fimage%2fqlmgtw4sbtwoqbz54klhd6cypfx3ggxu_hq.jpg&ehk=jW29%2fgN%2bkQLfzDxhF78thozu6ngAPu9DvLalpCIZvxI%3d&risl=&pid=ImgRaw&r=0" class="d-block w-100 c-img" alt="slide 3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="fs-1 bg-success text-center">
    News & Event
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>