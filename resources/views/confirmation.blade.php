<!DOCTYPE html>
<html>
<head>
    <title>Konfirmasi Pemesanan Kamar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .confirmation-card {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 4px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
        }
        .confirmation-card h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .confirmation-card ul {
            list-style-type: none;
            padding: 0;
        }
        .confirmation-card ul li {
            margin-bottom: 10px;
        }
        .confirmation-card .btn-back {
            display: block;
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="confirmation-card">
            <h2>Konfirmasi Pemesanan Kamar</h2>
            <p>Pemesanan kamar telah berhasil!</p>
            <h3>Detail Pemesanan</h3>
            <ul>
                <li>Nama: {{ $booking->name }}</li>
                <li>Email: {{ $booking->email }}</li>
                <li>Check-in: {{ $booking->checkin_date }}</li>
                <li>Check-out: {{ $booking->checkout_date }}</li>
            </ul>
            <a href="{{ route('logout') }}" class="btn btn-primary btn-back">Kembali</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
