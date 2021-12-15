<pre>
    <?php
    $city1 = 5;
    $city1Radius = 300;
    $city2 = 410;
    $city2Radius = 200;

    $city1Length = $city1 + $city1Radius;
    $city2Length = $city2 + $city2Radius;

    $cars = [];
    $kms = [];
    $countCars = 10;

    for($i = 0; $i < $countCars; $i++) {
        $cars[] = $i + 1;
    }

    for ($i = 0; $i < $countCars; $i++) {
        $kms[] = rand(0, 1000);
    }

    for ($i = 0; $i < $countCars; $i++) {
       if(($kms[$i] >= $city1 && $kms[$i] <= $city1Length) || ($kms[$i] >= $city2 && $kms[$i] <= $city2Length)) {
           var_dump("Машина {$cars[$i]} едет по городу на {$kms[$i]} км со скоростью не более 70");
       } else {
           var_dump("Машина {$cars[$i]} едет по шоссе на {$kms[$i]} км со скоростью не более 90");
       }
    }
    ?>
</pre>

