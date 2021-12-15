<pre>
    <?php
    $values = [];

    for ($i = 0; $i < 10; $i++) {
        $values[] = rand(0, 100);
    }

    $index = 0;

    foreach ($values as $i => $value) {
        if ($value < $values[$index]) {
            $index = $i;
        }
    }

    var_dump($values);
    echo PHP_EOL;
    echo "Индекс: {$index} => Число: {$values[$index]}" . PHP_EOL;
    ?>
</pre>

