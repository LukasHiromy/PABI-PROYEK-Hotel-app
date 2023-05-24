@extends('layout/app')

@section('content')

<!-- Our Rooms -->

<h2 class="mt-3 pt-2 mb-2 text-center fw-bold h-font">Our Rooms</h2>
<div class="container">
  <div class="row">

  <!-- Room card 1-->
    <div class="col-lg-4 co-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin:auto">
        <img src="images/rooms/1.jpg" class="card-img-top">  
        <div class="card-body">
          <h5>Tower Suite</h5>
          <h6 class="mb-4">IDR200.000 per night</h6>
          <div class="features mb-4">
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
          <div class="d-flex justify-content-evenly mb-2">
          <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
          <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
          </div>
        </div>       
      </div>
    </div>

     <!-- Room card 2-->
     <div class="col-lg-4 co-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin:auto">
        <img src="images/rooms/1.jpg" class="card-img-top">  
        <div class="card-body">
          <h5>Sky Suite Palais</h5>
          <h6 class="mb-4">IDR200.000 per night</h6>
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
          <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
          </div>
        </div>       
      </div>
    </div>

     <!-- Room card 3-->
     <div class="col-lg-4 co-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin:auto">
        <img src="images/rooms/1.jpg" class="card-img-top">  
        <div class="card-body">
          <h5>2-room Suite Palais</h5>
          <h6 class="mb-4">IDR200.000 per night</h6>
          <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">large sleeping</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">living room</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">separate children’s room</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">bath with shower/WC</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">bathroom scales</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">sauna towels</span>
          </div>

          <div class="facilities mb-4">
          <h6 class="mb-1">Facilities</h6>
          <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
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
          <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
          </div>
        </div>       
      </div>
    </div>

     <!-- Room card 4-->
     <div class="col-lg-4 co-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin:auto">
        <img src="images/rooms/1.jpg" class="card-img-top">  
        <div class="card-body">
          <h5>1-room Suite Palais</h5>
          <h6 class="mb-4">IDR200.000 per night</h6>
          <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">bath/shower</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">separate toilet</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">scales</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">safe and cozy sitting area</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">hairdryer</span>
            
          </div>
          <div class="facilities mb-4">
          <h6 class="mb-1">Facilities</h6>
          <span class="badge rounded-pill bg-light text-dark text-wrap">direct dial telephone</span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">flat screen TV</span>
          <span class="badge rounded-pill bg-light text-dark text-wrap"> radio</span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">wireless</span>
          
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
     <div class="col-lg-4 co-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin:auto">
        <img src="images/rooms/1.jpg" class="card-img-top">  
        <div class="card-body">
          <h5>1-Room Suite</h5>
          <h6 class="mb-4">IDR200.000 per night</h6>
          <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">2 Rooms</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">2 Rooms</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">2 Rooms</span>
          </div>

          <div class="facilities mb-4">
          <h6 class="mb-1">Facilities</h6>
          <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
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
          <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
          </div>
        </div>       
      </div>
    </div>


     <!-- Room card 6-->
    <div class="col-lg-4 co-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin:auto">
        <img src="images/rooms/1.jpg" class="card-img-top">  
        <div class="card-body">
          <h5>Double room Palais</h5>
          <h6 class="mb-4">IDR200.000 per night</h6>
          <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">2 Rooms</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">2 Rooms</span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">2 Rooms</span>
          </div>

          <div class="facilities mb-4">
          <h6 class="mb-1">Facilities</h6>
          <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
          <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
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
          <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
          </div>
        </div>       
      </div>
    </div>



    <div class="col-lg-12 text-center mt-5">
    </div>
  </div>
</div>



@endsection