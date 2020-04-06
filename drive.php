<?php
require "vehicle.php";
$Vehicle1 = new Vehicle(true, 100, Vehicle::LOW_ENGINE_POWER);
$Vehicle1->engine_start();
Vehicle::toHonk();
$Vehicle1::toHonk();
// var_dump($Vehicle1);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Vehicle</title>
</head>

<body>

    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">VESLA MODEL 1337</h1>
            <p class="lead">Atomic vehicle by Benjamin Pernot</p>
            <hr class="my-4">
            <p>Wheel condition:
                <?php
                echo $Vehicle1->wheel_condition() == true ? 'Good' : 'Bad';
                ?></p>
            <p>Fuel level: <?php echo $Vehicle1->fuel_level() ?>%</p>
            <p>Engine power: <?php echo $Vehicle1->engine_power() ?></p>
            <p>Engine state:
                <?php
                echo $Vehicle1->engine_state() == true ? 'Start' : 'Stop';
                ?></p>
            <a class="btn btn-primary btn-lg" href="drive.php" role="button">Start & Stop</a>
        </div>
    </div>

</body>

</html>