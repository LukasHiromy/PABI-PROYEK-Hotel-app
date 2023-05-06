<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel-Ku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<style>

/* Header */
header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px;
  background-color: #fff;
  box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
}

.logo {
  font-size: 1.5em;
  font-weight: bold;
}

.logo a {
  text-decoration: none;
  color: #333;
}

/* Body Content */
.search-box input[type="text"],
.search-box input[type="date"],
.search-box input[type="number"] {
  width: 100%;
  padding: 10px;
  margin-right: 10px;
  border: none;
  border-radius: 5px;
  box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
  font-size: 1em;
}

#search-button {
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  background-color: #333;
  color: #fff;
  font-size: 1em;
  cursor: pointer;
}

nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
}

nav ul li {
  margin: 0 10px;
}

nav ul li a {
  text-decoration: none;
  color: #333;
}

.auth a {
  margin-left: 20px;
  padding: 10px 20px;
  border: 2px solid #333;
  border-radius: 5px;
  text-decoration: none;
  color: #333;
}

.search-results {
  margin: 20px;
}

</style>

<body>
    <header>
        <div class="logo">
            <a href="#">Hotel-Ku</a>
        </div>
        <nav>
            <ul>
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Pencarian</a></li>
                <li><a href="#">Akun</a></li>
                <li><a href="#">Tentang Kami</a></li>
                <li><a href="#">Bantuan</a></li>
            </ul>
        </nav>
        <div class="auth">
            <a href="auth/register">Daftar</a>
            <a href="auth/login">Masuk</a>
        </div>
    </header>
    
    <!-- Content Carousel -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://i.pinimg.com/originals/6c/73/75/6c737506872effa6caac3d6a20ba2b53.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://i.pinimg.com/originals/6c/73/75/6c737506872effa6caac3d6a20ba2b53.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://i.pinimg.com/originals/6c/73/75/6c737506872effa6caac3d6a20ba2b53.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    
    <!-- Cari Hotel Content -->
    <div class="search-box">
        <input id="location" type="text" placeholder="Lokasi">
        <input id="checkin" type="date" placeholder="Check-in">
        <input id="checkout" type="date" placeholder="Check-out">
        <input id="guests" type="number" placeholder="Jumlah Tamu">
        <br><button style="display: flex; justify-content: center; align-items: center; width: 100%; height: 100%;" id="search-button">Cari</button>
    </div>
    
    <main>
        <section class="search-results">
            <!-- Hasil pencarian hotel akan ditampilkan di sini -->
        </section>
    </main>
    
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>