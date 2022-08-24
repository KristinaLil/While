<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While loops</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        .nav-link {
            color: #ffbb33;
            font-weight: 500;
        }
    </style>
</head>

<body>
    <ul class="nav nav-tabs text-warning">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="task1.php">Wages</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="task2.php">Odd || even</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="task3.php">Temperature control</a>
        </li>
    </ul>
    <div class="container w-50 text-center">
        <p class="mb-5 fs-1">Odd || Even</p>
        <div class="card mt-3">
            <h4 class="card-header text-center">Check the numbers!</h4>
            <div class="card-body">
                <p class="text-center"> Let's check how many odd and even numbers are in here:</p>
                <form action="" method="POST">
                    <div class="mb-3 mt-3 row">
                        <label class="col-sm-4 col-form-label">Number:</label>
                        <div class="col-sm-8">
                            <input type="number" name="number" class="form-control">
                        </div>
                    </div>
                    <div class="row align-items-center mt-3">
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-warning btn-md">Let's count!</button>
                        </div>
                    </div>
                </form>
                <div class="text-center mt-3 fw-bold">
                    <?php
                    if (isset($_POST['number'])) {
                        $number = $_POST['number'];
                        $odd = 0;
                        $even = 0;

                        while ($number != 0) {
                            if (($number % 10) % 2 == 0) {
                                $even++;
                                $number = (int)($number / 10);
                            } else {
                                $odd++;
                                $number = (int)($number / 10);
                            }
                        }
                        echo "You have $even numbers and $odd numbers!";
                    }

                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>