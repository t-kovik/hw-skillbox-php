<pre>
    <?php
        $numbers = [];

    for ($i = 0; $i < rand(3, 20); $i++) {
        $numbers[] = rand(0, 10);
    }

    $sum = 0;

    for($i = 1; $i < count($numbers); $i += 2 ) {
        $sum += $numbers[$i];
    }
    var_dump($numbers);
    var_dump($sum);
    ?>
</pre>
