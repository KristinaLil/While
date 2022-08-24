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
        <p class="mb-5 fs-1">Temperature control</p>
        <div class="card mt-3 mb-3">
            <h4 class="card-header text-center">How's the weather!🌞</h4>
            <div class="card-body">
                <p class="text-center mb-5"> Let's get temperature readings from your file:</p>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3 mt-3 row">
                        <div class="col-sm-8">
                            <input type="hidden" name="upload" value="1">
                            <input type="file" name="file">
                        </div>
                    </div>
                    <div class="row align-items-center mt-3">
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-warning btn-md">Let's check!</button>
                        </div>
                    </div>
                </form>
                <div class="text-center mt-3 fw-bold">
                    <?php

                    if (isset($_POST['upload'])) {

                        move_uploaded_file($_FILES['file']['tmp_name'], 'C:/xampp/htdocs/PHP/Homework/While/' . $_FILES['file']['name']);

                        $file = 'C:/xampp/htdocs/PHP/Homework/While/' . $_FILES['file']['name'];
                        $f = fopen($file, "r");

                        echo "Your temperature readings: <br>";
                        while ($row = fgets($f)) {
                            echo "$row/ ";
                        }

                        $temperatures = file($file, FILE_IGNORE_NEW_LINES);
                        $min = min($temperatures);
                        $max = max($temperatures);
                        $average = round((array_sum($temperatures) / count($temperatures)), 1);
                        echo "<br>Minimum temperature: $min . <br>";
                        echo "Maximum temperature: $max . <br>";
                        echo "Average temperature: $average . <br>";

                        fclose($f);
                    }

                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>