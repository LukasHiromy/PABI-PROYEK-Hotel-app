@extends('layout/app')

@section('content')
<div class="ny-5 px-4">
    <h2 class="fw-bold h-font text-center">OUR ROOM</h2>
    <div class="h-line bg-dark"></div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-12 mb-lg-0 mb-4">
            <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                <div class="container-fluid flex-lg-column align-items-stretch">
                    <h4 class="mt-2">FILTERS</h4>
                    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                        data-bs-target="#filterDropdown" aria-controls="filterDropdown" aria-expanded="false"
                        aria-label="Toggle Filters">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse flex-column align-items-stretch" id="filterDropdown">
                        <div class="border bg-light p-3 rounded mb-3">
                            <h5 class="mb-3" style="font-size: 18px;">CHECK AVAILABILITY</h5>
                            <label class="form-label">Check-in</label>
                            <input type="date" class="form-control shadow-none mb-3">
                            <label class="form-label">Check-out</label>
                            <input type="date" class="form-control shadow-none mb-3">
                        </div>
                        <div class="border bg-light p-3 rounded mb-3">
                            <h5 class="mb-3" style="font-size: 18px;">FACILITIES</h5>
                            <div class="mb-2">
                                <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                <label class="form-check-label" for="f1">Facility one</label>
                            </div>
                            <div class="mb-2">
                                <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                                <label class="form-check-label" for="f2">Facility two</label>
                            </div>
                            <div class="mb-2">
                                <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                                <label class="form-check-label" for="f3">Facility three</label>
                            </div>
                        </div>
                        <div class="border bg-light p-3 rounded mb-3">
                            <h5 class="mb-3" style="font-size: 18px;">GUESTS</h5>
                            <div class="d-flex">
                                <div class="me-3">
                                    <label class="form-label">Adults</label>
                                    <input type="number" class="form-control shadow-none">
                                </div>
                                <div>
                                    <label class="form-label">Children</label>
                                    <input type="number" class="form-control shadow-none">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <div class="col-lg-9 col-md-12 px-4">
            <div class="card mb-4 border-0 shadow">
                <div class="row g-0 p-3 align-items-center">
                    <div class="col-md-4">
                        <img src="images/rooms/IMG_11892.png" class="img-fluid rounded-start" alt="Room Image">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Simple Room</h5>
                            <div class="features mb-3">
							<div class="badges">
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">2 Rooms</span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bathroom</span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">1 Balcony</span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">3 Sofa</span>
								</div>
                            </div>
                            <div class="facilities mb-3">
							<div class="badges">
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">Room heater</span>
                                </div>
                            </div>
                            <div class="guests mb-3">
							<div class="badges">
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">5 Adults</span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">4 Children</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="mb-4">1200 per night</h6>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                                    <a href="#" class="btn btn-sm btn-outline-dark shadow-none ml-2">More details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Room card 2 -->
            <div class="card mb-4 border-0 shadow">
                <div class="row g-0 p-3 align-items-center">
                    <div class="col-md-4">
                        <img src="images/rooms/IMG_39782.png" class="img-fluid rounded-start" alt="Room Image">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Deluxe Room</h5>
                            <div class="features mb-3">
							<div class="badges">
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">2 Rooms</span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bathroom</span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">1 Balcony</span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">3 Sofa</span>
								</div>
                            </div>
                            <div class="facilities mb-3">
							<div class="badges">
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">Room heater</span>
                                </div>
                            </div>
                            <div class="guests mb-3">
							<div class="badges">
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">5 Adults</span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">4 Children</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="mb-4">1500 per night</h6>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                                    <a href="#" class="btn btn-sm btn-outline-dark shadow-none ml-2">More details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Room card 3 -->
            <div class="card mb-4 border-0 shadow">
                <div class="row g-0 p-3 align-items-center">
                    <div class="col-md-4">
                        <img src="images/rooms/IMG_42663.png" class="img-fluid rounded-start" alt="Room Image">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Luxury Suite</h5>
                            <div class="features mb-3">
							<div class="badges">
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">2 Rooms</span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">2 Bathroom</span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">1 Balcony</span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">3 Sofa</span>
								</div>
                            </div>
                            <div class="facilities mb-3">
							<div class="badges">
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">Room heater</span>
                                </div>
                            </div>
                            <div class="guests mb-3">
							<div class="badges">
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">5 Adults</span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">4 Children</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="mb-4">2000 per night</h6>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                                    <a href="#" class="btn btn-sm btn-outline-dark shadow-none ml-2">More details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

</div>
@endsection