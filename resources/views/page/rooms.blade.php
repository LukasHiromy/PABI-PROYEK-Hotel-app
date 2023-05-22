@extends('layout/app')

@section('content')
	<div class="ny-5 px-4">
		<h2 class="fw-bold h-font text-center">OUR ROOM</h2>
		<div class="h-line bg-dark"></div>
	</div>

	<div class="container">
		<div class="row">

			{{-- fungsinya untuk apa --}}
			<div class="col-lg-3 col-md-12 mb-lg-0 mb-4">
				<nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
					<div class="container-fluid flex-lg-column align-items-stretch">
						<h4 class="nt-2">FILTERS</h4>
						<button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target=" ">
							<span class="navbar-toggler-icon"></span>
						<button>
						<div class="collapse navbar-collapse flex-column align-items-strectch at-2" id="filterDropdown">
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
				</nav>
			</div>

			{{-- perlu di perbaiki tampilan di bagian sini --}}
			<div class="col-lg-9 col-md-12 px-4">
				<div class="card mb-4 border-0 shadow">
					<div class="row g-0 p-3 align-items-center">
						<div class="col-md-4">
						<img src="..." class="img-fluid rounded-start">
						</div>
						<div class="col-md-5">
							<h5 class="mb-3">Simple Room Name</h5>
							<div class="features mb-3">
							<h6 class="mb-1">Features</h6>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								2 Rooms
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								1 Bathroom
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								1 Balcony
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								3 Sofa
							</span>
						</div>
						</div>

						{{-- perbaiki ini  --}}
						<h6 class="mb-1">Facilities</h6>
							<div class="facilities mb-3">
							<h6 class="mb-1">Features</h6>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								Wifi
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								Television
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								AC
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								Room heater
							</span>
						</div>
						</div>

						{{-- perbaiki ini --}}
						<div class="guests mb-3">
							<h6 class="mb-1">Guests</h6>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								5 Adults
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap">
								4 Children
							</span>

							{{-- gambarnya belum ada dan perbaiki --}}
						<img src="..." class="img-fluid rounded-start" alt="...">
						</div>
						<div class="col-md-2">
							<h6 class="mb-4">1200 per night</h6>
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
						</div>	
						</div>
					</div>
					</div>

@endsection