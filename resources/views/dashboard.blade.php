<!DOCTYPE html>
<html>
<head>
    <title>Hotel VALS - Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Hotel VALS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <h2>Selamat datang, {{ Auth::user()->name }}!</h2>
        <p>Anda telah berhasil login ke sistem.</p>

        <div class="row">
            <div class="col-md-6">
                <h3>Kamar Tersedia</h3>
                <ul class="list-group">
                    <li class="list-group-item">Tower Suite-$500 per night<a href="{{ route('booking', ['room' => 'Tower Suite']) }}"><button type="button" class="btn btn-primary">Book Now</button></a></li>
                    <li class="list-group-item">Sky Suite Palais - $700 per night <a href="{{ route('booking', ['room' => 'Sky Suite Palais']) }}"><button type="button" class="btn btn-primary">Book Now</button></a></li>
                    <li class="list-group-item">2-room Suite Palais - $600 per night <a href="{{ route('booking', ['room' => '2-room Suite Palais']) }}"><button type="button" class="btn btn-primary">Book Now</button></a></li>
                    <li class="list-group-item">1-room Suite Palais- $800 per night <a href="{{ route('booking', ['room' => '2-room Suite Palais']) }}"><button type="button" class="btn btn-primary">Book Now</button></a></li>
                    <li class="list-group-item">1-room Palais - $900 per night <a href="{{ route('booking', ['room' => '2-room Suite Palais']) }}"><button type="button" class="btn btn-primary">Book Now</button></a></li>
                    <li class="list-group-item">Double room Palais - $700 per night <a href="{{ route('booking', ['room' => '2-room Suite Palais']) }}"><button type="button" class="btn btn-primary">Book Now</button></a></li>
                    <li class="list-group-item">Double room Palais - $700 per night <a href="{{ route('booking', ['room' => '2-room Suite Palais']) }}"><button type="button" class="btn btn-primary">Book Now</button></a></li>
                
                </ul>
            </div>
            <div class="col-md-6">
                <h3>Pemesanan Terakhir</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Tamu</th>
                            <th scope="col">Tanggal Check-in</th>
                            <th scope="col">Tanggal Check-out</th>
                            <th scope="col">Kamar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>John Doe</td>
                            <td>2023-06-01</td>
                            <td>2023-06-05</td>
                            <td>Suite Mewah</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jane Smith</td>
                            <td>2023-06-03</td>
                            <td>2023-06-07</td>
                            <td>Kamar Deluxe</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="mt-4">
            <h3>Fitur Tambahan</h3>
            <p>Di sini Anda dapat menambahkan deskripsi tentang fitur tambahan yang tersedia di hotel.</p>
            <p>Contoh:</p>
            <ul>
                <li>Restoran dengan masakan khas</li>
                <li>Kolam renang dan pusat kebugaran</li>
                <li>Wi-Fi gratis di seluruh hotel</li>
                <li>Tempat parkir yang luas</li>
                <li>Layanan kamar 24 jam</li>
            </ul>
        </div>

        <div class="mt-4">
            <h3>Galeri Hotel</h3>
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('images/rooms/1.jpg') }}" class="img-fluid" alt="Galeri 1">
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('images/rooms/6.png') }}" class="img-fluid" alt="Galeri 2">
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('images/rooms/3.png') }}" class="img-fluid" alt="Galeri 3">
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
