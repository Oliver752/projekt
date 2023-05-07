<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wineglass Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url("../img/taste.png");
            background-size: cover;
            background-position: center;
        }

        .form {
            background-color: rgba(35, 35, 35, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        label {
            font-weight: bold;
        }

        .btn-primary {
            background-color: #4CAF50;
            border: none;
        }

        .btn-primary:hover {
            background-color: #3e8e41;
            border: none;
        }

        .form-control:focus {
            box-shadow: none;
        }
    </style>
</head>
<body>
<br><br><br><br><br><br><br><br>
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-6">
            <form class="form text-light" action="add_reservation.php" method="post">
                <h2 class="text-center mb-4">Wine Tasting Reservation</h2>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="reservationname" name="reservationname" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="reservationemail" name="reservationemail" required>
                </div>
                <div class="form-group">
                    <label for="persons">Number of Persons:</label>
                    <input type="number" class="form-control" id="persons" name="persons" required>
                </div>
                <div class="form-group">
                    <label for="timedate">Date and Time:</label>
                    <input type="datetime-local" class="form-control" id="timedate" name="timedate" required>
                </div>
                <button type="submit" name="submit" class="btn btn-danger btn-block">Submit</button>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>