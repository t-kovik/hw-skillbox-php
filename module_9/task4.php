<pre>
    <?php
    $city1 = rand (1, 1000);
    $city1Radius = rand(1, 50);
    $city2 = rand (1, 1000);
    $city2Radius = rand(1, 100);

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
       if(($kms[$i] >= $city1 - $city1Radius && $kms[$i] <= $city1 + $city1Radius) || ($kms[$i] >= $city2 - $city2Radius && $kms[$i] <= $city2 + $city2Radius)) {
           var_dump("Машина {$cars[$i]} едет по городу на {$kms[$i]} км со скоростью не более 70");
       } else {
           var_dump("Машина {$cars[$i]} едет по шоссе на {$kms[$i]} км со скоростью не более 90");
       }
    }
    ?>
</pre>

