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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="css/style.css">
        <style>
          * {
    font-family: 'Poppins', sans-serif;
  }
  
  .h-font {
    font-family: 'Merienda', cursive;
  }
  
  input::-webkit-outer-spin-button,
  input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }
  
  input[type=number] {
    -moz-appearance: textfield;
    appearance: textfield;
  }
  
  .custom-bg {
    background-color: #2ec1ac;
    border: 1px solid #2ec1ac;
  }
  
  .custom-bg:hover {
    background-color: #279e8c;
    border-color: #279e8c;
  }
  
            .availability-form{
              margin-top: -50px;
              z-index: 2;
              position:  relative;
            }
            @media screen and (max-width: 575px) {
               .availability-form{
                margin-top: 25px;
                padding: 0 35px;
              }
            }

        </style>
    </head>
    <body class="bg-light">
        
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="welcome.blade.php">VALS HOTEL</a>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active me-2" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="/rooms">Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="/facilities">Facilities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">About</a>
        </li>
      </ul>
      <div class="d-flex">
        <a href="{{url('login')}}"> 
          <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button></a>
          <a href="{{url('register')}}">
            <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">Register</button>
          </a>
    </div>
    </div>
  </div>
</nav>

{{-- <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form>
        <div class="modal-header">
        <h5 class="modal-title d-flex align-itemz-center">
        <i class="bi bi-person-circle fs-3 me-2"></i>  User Login
        </h5>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3">
        <label class="form-label">Email address</label>
        <input type="email" class="form-control shadow-none">
        </div>
        <div class="mb-4">
        <label class="form-label">Password</label>
        <input type="password" class="form-control shadow-none">
        </div>
        <div class="d-flex align-items-center justify-content-between mb-2">
            <button type="submit" class="btn btn-dark shadow none">LOGIN</button>
            <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
        </div>
      </div>
        </form>
    </div>
  </div>
</div> --}}

<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <form>
        <div class="modal-header">
        <h5 class="modal-title d-flex align-itemz-center">
        <i class="bi bi-person-lines-fill fs-3 me-2"></i> User Registration
        </h5>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
      Note: Your details must match with your ID (Aadhaar card, passport, driving license, rtc.)
      that will be required during check-in.
    </span>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 ps-0 mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control shadow-none">
        </div>
        <div class="col-md-6 p-0 mb-3">
        <label class="form-label">Email </label>
        <input type="email" class="form-control shadow-none">
        </div>
        <div class="col-md-6 ps-0 mb-3">
        <label class="form-label">Phone Number</label>
        <input type="number" class="form-control shadow-none">
        </div>
        <div class="col-md-6 p-0 mb-3">
        <label class="form-label">Picture</label>
        <input type="file" class="form-control shadow-none">
        </div>
        <div class="col-md-12 p-0 mb-3">
        <label class="form-label">Address</label>
        <textarea class="form-control shadow-none" rows="1"></textarea>
       </div>
       <div class="col-md-6 ps-0 mb-3">
        <label class="form-label">Pincode</label>
        <input type="number" class="form-control shadow-none">
        </div>
        <div class="col-md-6 p-0 mb-3">
        <label class="form-label">Date of birth</label>
        <input type="date" class="form-control shadow-none">
        </div>
        <div class="col-md-6 ps-0 mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control shadow-none">
        </div>
        <div class="col-md-6 p-0 mb-3">
        <label class="form-label">Confirm Password</label>
        <input type="password" class="form-control shadow-none">
        </div>
      </div>
    </div>
    <div class="text-center MY-1">
      <button type="submit" class="btn btn-dark shadow none">REGISTER</button>
    </div>
      </div>
        </form>
    </div>
  </div>
</div>

<!-- Carousel -->

<div class="container-fluid px-lg-4 mt-4">
<div class="swiper swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="images/carousel/norica.jpg" class="w-100 d-block"/>
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/norica1.jpg" class="w-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/norica2.jpg" class="w-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/norica3.jpg" class="w-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/norica4.jpg" class="w-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/norica5.jpg" class="w-100 d-block" />
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/norica6.jpg" class="w-100 d-block" />
      </div>
    </div>
  </div>
</div>


<!-- Check Availability Form -->

<div class="container availability-form">
  <div class="row">
    <div class="col-lg-12 bg-white shadow p-4 rounded">
      <h5 class="mb-4">Check Booking Availability</h5>
      <form>
        <div class="row align-items-end">
          <div class="col-lg-3 mb-3">
          <label class="form-label" style="font-weight: 500";>Check-in</label>
          <input type="date" class="form-control shadow-none">
          </div>
          <div class="col-lg-3 mb-3">
          <label class="form-label" style="font-weight: 500";>Check-out</label>
          <input type="date" class="form-control shadow-none">
          </div>
          <div class="col-lg-3 mb-3">
          <label class="form-label" style="font-weight: 500";>Adult</label>
          <select class="form-select shadow-none">
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
          </select>
          </div>
          <div class="col-lg-2 mb-3">
          <label class="form-label" style="font-weight: 500";>Children</label>
          <select class="form-select shadow-none">
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
          </select>
          </div>
          <div class="col-lg-1 mb-lg-3 mt-2">
            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

  <!-- Our Rooms -->

  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Rooms</h2>

  <div class="container">
    <div class="row">
      <div class="col-lg-4 co-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin:auto">
          <img src="images/rooms/1.jpg" class="card-img-top">  
          <div class="card-body">
            <h5>Tower Suite</h5>
            <h6 class="mb-4">$500 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6><span class="badge rounded-pill bg-light text-dark text-wrap"> a sofa bed</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">a fully equipped kitchen </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">a dining area</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">a modern bathroom</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">a pine wood bedroom</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">a walk-in wardrobe </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">a free hanging rope bed </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap"> a fireplace  </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">heated floors</span>

            </div>
            <div class="facilities mb-4">
            <h6 class="mb-1">Facilities</h6>
           <span class="badge rounded-pill bg-light text-dark text-wrap">Wi-Fi</span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">TV</span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">Radio</span>
          </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <br>
            <br>
            <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
            <a href="http://localhost:8000/rooms" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
            </div>
          </div>       
        </div>
      </div>

      <div class="col-lg-4 co-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin:auto">
          <img src="images/rooms/2.png" class="card-img-top">  
          <div class="card-body">
            <h5>Sky Suite Palais</h5>
            <h6 class="mb-4">$700 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">one bedroom </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">a large living room </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">wine refrigerator</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">fully equipped kitchenette</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">a free-standing bath tub</span>
          </div>

            <div class="facilities mb-4">
            <h6 class="mb-1">Facilities</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">Wi-Fi</span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">HD-flat screen TV</span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">Radio</span>
          </div>
          <br>
          <br>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <br>
            <br>
            <div class="d-flex justify-content-evenly mb-2">
              <br>
              <br>
            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
            <a href="http://localhost:8000/rooms" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
            </div>
          </div>       
        </div>
      </div>

      <div class="col-lg-4 co-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin:auto">
          <img src="images/rooms/3.png" class="card-img-top">  
          <div class="card-body">
            <h5>2-room Suite Palais</h5>
            <h6 class="mb-4">$600 per night</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Features</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">large sleeping</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">living room</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">separate children’s room</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">bath with shower/WC</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">bathroom scales</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">mini bar</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">convertible sofa</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">cosy sitting area</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">balcony</span>
            </div>

            <div class="facilities mb-4">
            <h6 class="mb-1">Facilities</h6>
           <span class="badge rounded-pill bg-light text-dark text-wrap">cosmetics</span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">HD-flat screen TV</span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">Wi-Fi</span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">radio</span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">bathrobes</span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">sauna towels</span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">slippers</span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">safe</span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">water kettles</span>
          </div>

            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
            <a href="http://localhost:8000/rooms" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
            </div>
          </div>       
        </div>
      </div>
      
      <div class="col-lg-12 text-center mt-5">
        <a href="http://localhost:8000/rooms" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
      </div>
    </div>
  </div>

 <!-- Our Facilities -->

  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Facilities</h2>

  <div class="container">
  <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/features/wifi.svg" width="80px">
      <h5 class="mt-3">Wifi</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/features/1.svg" width="80px">
      <h5 class="mt-3">Fireplace</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/features/2.svg" width="80px">
      <h5 class="mt-3">Television</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/features/3.svg" width="80px">
      <h5 class="mt-3">Spa</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="images/features/4.svg" width="80px">
      <h5 class="mt-3">Air Conditioner</h5>
    </div>
    <div class="col-lg-12 text-center mt-5">
      <a href="http://localhost:8000/facilities" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities>>></a>
    </div>
  </div>
  </div>

   <!-- Testimonials -->

  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Testimonials</h2>

  <div class="container mt-5">
    <div class="swiper swiper-testimonials">
      <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <img src="images/features/star.jpg" width="30px">
            <h6 class="m-0 ms-2">Random user1</h6>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Cum ea assumenda necessitatibus culpa sunt incidunt eius, 
            labore enim eligendi quas quos consequuntur? Ea eligendi mollitia enim beatae, quis veniam optio?
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>  
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <img src="images/features/star.jpg" width="30px">
            <h6 class="m-0 ms-2">Random user1</h6>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Cum ea assumenda necessitatibus culpa sunt incidunt eius, 
            labore enim eligendi quas quos consequuntur? Ea eligendi mollitia enim beatae, quis veniam optio?
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>  
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <img src="images/features/star.jpg" width="30px">
            <h6 class="m-0 ms-2">Random user1</h6>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Cum ea assumenda necessitatibus culpa sunt incidunt eius, 
            labore enim eligendi quas quos consequuntur? Ea eligendi mollitia enim beatae, quis veniam optio?
          </p>
          <div class="rating">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>           
       
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
  <div class="col-lg-12 text-center mt-5">
    <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More>>></a>
  </div>

 <!-- Reach us -->

  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Reach Us</h2>

  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
        <iframe class="w-100 rounded" height="320" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d254832.60117456663!2d98.52940668065038!3d3.64227564268286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131cc1c3eb2fd%3A0x23d431c8a6908262!2sMedan%2C%20Kota%20Medan%2C%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1683708017117!5m2!1sid!2sid" loading="lazy"></iframe>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="bg-white p-4 rounded mb-4">
          <h5>Call us</h5>
          <a href="tel: +6281234565" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> +6281234565
          </a>
          <br>
          <a href="tel: +6281234565" class="d-inline-block text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> +6281234565
          </a>
        </div>
        <div class="bg-white p-4 rounded mb-4">
          <h5>Follow us</h5>
          <a href="#" class="d-inline-block mb-3">
           <span class="badge bg-lighht text-dark fs-6 p-2">
            <i class="bi bi-twitter me-1"></i> Twitter
           </span>
          </a>
          <br>
          <a href="#" class="d-inline-block mb-3">
            <span class="badge bg-lighht text-dark fs-6 p-2">
             <i class="bi bi-facebook me-1"></i> Facebook
            </span>
           </a>
           <br>
           <a href="#" class="d-inline-block">
            <span class="badge bg-lighht text-dark fs-6 p-2">
             <i class="bi bi-instagram me-1"></i> Instagram
            </span>
           </a>
        </div>
      </div>
    </div>
  </div>

 <h6 class="text-center bg-dark text-white p-3 m-0">Desaigned and Developed by VALS HOTEL</h6>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  
  
    <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      }
    });

    var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      }
    });
  </script>

  </body>
</html>