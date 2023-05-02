
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Wineglass Form</title>
    <style>
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
            background-image: url("img/feher.png");
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

<div class="container">
    <?php
    if(isset($_GET['msg'])){
        $msg = $_GET['msg'];
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  '.$msg.'
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    }
    ?>

    <a href="taste.php" class="btn btn-dark mb-3"> Add new </a>
    <table class="table table-hover text-center">
        <thead class="table-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">E-mail</th>
            <th scope="col">Count</th>
            <th scope="col">DateTime</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        include "db_conn.php";
        $sql = "SELECT * FROM `taste_signup`";
        $result = mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_assoc($result)){
            ?>
                 <tr>
                     <td><?php echo $row ['id'] ?></td>
                     <td><?php echo $row ['name'] ?></td>
                     <td><?php echo $row ['email'] ?></td>
                     <td><?php echo $row ['count'] ?></td>
                     <td><?php echo $row ['date'] ?></td>

                    <td>
                        <a href="edittaste.php?id=<?php echo $row['id'] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                        <a href="deletetaste.php?id=<?php echo $row['id'] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
                    </td>
                </tr>
            <?php
        }
        ?>


        </tbody>
    </table>


</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>