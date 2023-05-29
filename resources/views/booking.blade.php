<!DOCTYPE html>
<html>
<head>
    <title>Booking Kamar Hotel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .booking-form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 4px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
        }
        .booking-form h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .booking-form .form-group {
            margin-bottom: 20px;
        }
        .booking-form label {
            font-weight: bold;
        }
        .booking-form input[type="text"],
        .booking-form input[type="email"],
        .booking-form input[type="date"] {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border-radius: 4px;
            border: 1px solid #ced4da;
        }
        .booking-form button[type="submit"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            font-weight: bold;
            color: #ffffff;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="booking-form">
            <h2>Pemesanan Kamar {{ $room }}</h2>
            <form method="POST" action="{{ route('booking.store', ['room' => $room]) }}">
                @csrf
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="checkin_date">Tanggal Check-in</label>
                    <input type="date" class="form-control" id="checkin_date" name="checkin_date" required>
                </div>
                <div class="form-group">
                    <label for="checkout_date">Tanggal Check-out</label>
                    <input type="date" class="form-control" id="checkout_date" name="checkout_date" required>
                </div>
                <button type="submit" class="btn btn-primary">Pesan</button>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
