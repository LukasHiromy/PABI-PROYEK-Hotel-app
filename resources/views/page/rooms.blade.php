@extends('layout/app')

@section('content')

<!-- Our Rooms -->

<h2 class="mt-3 pt-2 mb-2 text-center fw-bold h-font">Our Rooms</h2>
<div class="container">
  <div class="row">
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
  <!-- Room card 1-->
    <div class="col-lg-4 co-md-4 my-3">
      <div class="card border-3 shadow" style="max-width: 450px; margin:auto">
        <img src="images/rooms/1.jpg" class="card-img-top">  
        <div class="card-body">
          <h5>Tower Suite</h5>
          <h6 class="mb-4">$500 per night</h6>
          <div class="rating mb-4">
            <h6 class="mb-1">2-4 people</h6>
          </div>
          <div class="features mb-2">
            <h6 class="mb-1">Features</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap"> a sofa bed</span>
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
          <h6 class="mb-0">Facilities</h6>
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
          <div class="d-flex justify-content-evenly mb-2">
          <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
          </div>
        </div>       
      </div>
    </div>

     <!-- Room card 2-->
     <div class="col-lg-4 co-md-4 my-3">
      <div class="card border-3 shadow" style="max-width: 450px; margin:auto">
        <img src="images/rooms/3.png" class="card-img-top">  
        <div class="card-body">
          <h5>Sky Suite Palais</h5>
          <h6 class="mb-4">$700 per night</h6>
          <div class="rating mb-4">
            <h6 class="mb-1">2-4 people</h6>
          </div>
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
          <div class="d-flex justify-content-evenly mb-2">
          <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
          </div>
        </div>       
      </div>
    </div>

     <!-- Room card 3-->
     <div class="col-lg-4 co-md-4 my-3">
      <div class="card border-3 shadow" style="max-width: 450px; margin:auto">
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
          </div>
        </div>       
      </div>
    </div>

     <!-- Room card 4-->
     <div class="col-lg-4 co-md-4 my-3">
      <div class="card border-3 shadow" style="max-width: 450px; margin:auto">
        <img src="images/rooms/4.png" class="card-img-top">  
        <div class="card-body">
          <h5>1-room Suite Palais</h5>
          <h6 class="mb-4">$800 per night</h6>
          <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">Large sleeping & living room</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">bath with shower/WC</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">bathroom scales</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">safe and cozy sitting area</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">hairdryer</span>  
            <span class="badge rounded-pill bg-light text-dark text-wrap">mini bar</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">convertible sofa</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">balcony</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">cosy sitting area with a desk</span>
          
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
          <span class="badge rounded-pill bg-light text-dark text-wrap">hair dryer</span>
          <span class="badge rounded-pill bg-light text-dark text-wrap"> free WLAN</span>
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
          </div>
        </div>       
      </div>
    </div>

     <!-- Room card 5-->
     <div class="col-lg-4 co-md-4 my-3">
      <div class="card border-3 shadow" style="max-width: 450px; margin:auto">
        <img src="images/rooms/5.png" class="card-img-top">  
        <div class="card-body">
          <h5>1-Room Palais</h5>
          <h6 class="mb-4">$900 per night</h6>
          <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">Large sleeping & living room</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">bath with shower/WC</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">bathroom scales</span>
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
          <span class="badge rounded-pill bg-light text-dark text-wrap">hair dryer</span>
          <span class="badge rounded-pill bg-light text-dark text-wrap"> free WLAN</span>
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
          <br>
          <br>
          <div class="d-flex justify-content-evenly mb-2">
          <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
          </div>
        </div>       
      </div>
    </div>


     <!-- Room card 6-->
     <div class="col-lg-4 co-md-4 my-3">
      <div class="card border-3 shadow" style="max-width: 450px; margin:auto">
        <img src="images/rooms/6.png" class="card-img-top">  
        <div class="card-body">
          <h5>Double room Palais</h5>
          <h6 class="mb-4">$700 per night</h6>
          <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">Double room</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">bath with shower/WC</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">2 Rooms</span>
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
          <br>
          <br>
          <br>
          <div class="d-flex justify-content-evenly mb-2">
          <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
          </div>
        </div>       
      </div>
    </div>



    <div class="col-lg-12 text-center mt-5">
    </div>
  </div>
</div>



@endsection