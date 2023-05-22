<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel VALS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Merienda&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="stylesheet" href="css/style.css">
  <style>
    .availability-form {
      margin-top: -50px;
      z-index: 2;
      position: relative;
    }

    @media screen and (max-width: 575px) {
      .availability-form {
        margin-top: 25px;
        padding: 0 35px;
      }
    }
  </style>
</head>

<body class="bg-light">

  <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">VALS HOTEL</a>
      <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="#">Rooms</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="#">Facilities</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="#">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="#">About</a>
          </li>
        </ul>
        <div class="d-flex">
          <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
            Login
          </button>
          <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
            Register
          </button>
        </div>
      </div>
    </div>
  </nav>

  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="img/slider-1.jpg" alt="Slider Image 1">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 offset-lg-5 col-md-8 offset-md-4 col-10 offset-1">
              <div class="hero-text">
                <h1 class="h1-font">Welcome to VALS HOTEL</h1>
                <p class="fs-5 mt-3">Experience the luxury and comfort you deserve.</p>
                <button class="btn btn-primary mt-4 shadow-none">Book Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <img src="img/slider-2.jpg" alt="Slider Image 2">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 offset-lg-5 col-md-8 offset-md-4 col-10 offset-1">
              <div class="hero-text">
                <h1 class="h1-font">Unwind in Our Luxurious Rooms</h1>
                <p class="fs-5 mt-3">Experience the comfort like never before.</p>
                <button class="btn btn-primary mt-4 shadow-none">Book Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <img src="img/slider-3.jpg" alt="Slider Image 3">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 offset-lg-5 col-md-8 offset-md-4 col-10 offset-1">
              <div class="hero-text">
                <h1 class="h1-font">Indulge in Our World-Class Amenities</h1>
                <p class="fs-5 mt-3">Experience luxury at its finest.</p>
                <button class="btn btn-primary mt-4 shadow-none">Book Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>

  <div class="container py-5">
    <div class="row">
      <div class="col-lg-6">
        <h2 class="h2-font">Welcome to VALS Hotel</h2>
        <p class="mt-3">Experience luxury and comfort like never before at VALS Hotel. Located in the heart of the city, our hotel offers world-class amenities, spacious and elegantly designed rooms, and exceptional service to make your stay truly unforgettable.</p>
        <p>Whether you're traveling for business or leisure, VALS Hotel is the perfect choice. Our friendly staff is always ready to assist you and ensure a memorable stay.</p>
      </div>
      <div class="col-lg-6">
        <img class="img-fluid" src="img/about-img.jpg" alt="About Image">
      </div>
    </div>
  </div>

  <div class="container py-5">
    <h2 class="h2-font text-center mb-4">Our Rooms</h2>
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card shadow-sm">
          <img src="img/room-1.jpg" class="card-img-top" alt="Room 1">
          <div class="card-body">
            <h5 class="card-title">Deluxe Room</h5>
            <p class="card-text">Spacious and comfortable room with modern amenities.</p>
            <a href="#" class="btn btn-primary shadow-none">View Details</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card shadow-sm">
          <img src="img/room-2.jpg" class="card-img-top" alt="Room 2">
          <div class="card-body">
            <h5 class="card-title">Executive Suite</h5>
            <p class="card-text">Luxurious suite with a separate living area and breathtaking views.</p>
            <a href="#" class="btn btn-primary shadow-none">View Details</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card shadow-sm">
          <img src="img/room-3.jpg" class="card-img-top" alt="Room 3">
          <div class="card-body">
            <h5 class="card-title">Penthouse</h5>
            <p class="card-text">An exquisite and spacious penthouse offering ultimate luxury.</p>
            <a href="#" class="btn btn-primary shadow-none">View Details</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container py-5">
    <h2 class="h2-font text-center mb-4">Facilities</h2>
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card shadow-sm">
          <img src="img/facility-1.jpg" class="card-img-top" alt="Facility 1">
          <div class="card-body">
            <h5 class="card-title">Swimming Pool</h5>
            <p class="card-text">Relax and unwind in our sparkling swimming pool.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card shadow-sm">
          <img src="img/facility-2.jpg" class="card-img-top" alt="Facility 2">
          <div class="card-body">
            <h5 class="card-title">Fitness Center</h5>
            <p class="card-text">Stay fit and healthy at our state-of-the-art fitness center.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card shadow-sm">
          <img src="img/facility-3.jpg" class="card-img-top" alt="Facility 3">
          <div class="card-body">
            <h5 class="card-title">Spa & Wellness</h5>
            <p class="card-text">Indulge in a rejuvenating spa treatment and experience ultimate relaxation.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="bg-dark text-white text-center py-4">
    <p class="mb-0">&copy; 2023 VALS Hotel. All rights reserved. | Designed by Your Name</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Qw6RQ6n5fEeEwp+JQxI7kA9V/Sz0bXnZwksjldSKAP7RJfo7Njq3+VZh5e2vL6bm" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="js/script.js"></script>

</body>

</html>
