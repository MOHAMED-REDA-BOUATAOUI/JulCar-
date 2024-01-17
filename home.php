<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Julcar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            text-align: center;
        }
        nav a:hover {
            background-color: #777;
        }
        header {
            background-color: #333;
            color: white;
            padding: 20px;
        }

        section {
            margin: 40px 0;
        }

        .car-image {
            width: 200px;
            height: 150px;
            object-fit: cover;
            margin: 10px;
            border: 2px solid #333;
            border-radius: 8px;
        }

        .car-price {
            font-size: 18px;
            margin-top: 10px;
        }
    </style>
</head>
<body>



    <header>
        <h1>Welcome to Julcar Rental</h1>
        <p>Your premier destination for quality car rentals.</p>
    </header>
    <a href="login.php">Login</a>
        <a href="signup.php">Signup</a>
    <section>

        <h2>Our Cars</h2>

        <div>
            <img src="clio4.png" alt="Car 1" class="car-image">
            <p class="car-price">RENAULT CLIO 4 : 300DH / day</p>
        </div>

        <div>
            <img src="clio5.jpg" alt="Car 2" class="car-image">
            <p class="car-price">RENAULT CLIO 5 : 400DH / day</p>
        </div>

        <div>
            <img src="lodgy.png" alt="Car 3" class="car-image">
            <p class="car-price">DACIA LODGY : 400DH / day</p>
        </div>

        <div>
            <img src="RangeRover.jpg" alt="Car 4" class="car-image">
            <p class="car-price">RANGE ROVER EVOQUE : 1300DH / day</p>
        </div>

        <div>
            <img src="jeep.jpg" alt="Car 5" class="car-image">
            <p class="car-price">JEEP GRAND CHEROKEE 700 DH / day</p>
        </div>
    </section>

</body>
</html>

