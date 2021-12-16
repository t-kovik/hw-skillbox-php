<pre>
    <?php
    $studentsCount = rand(1, 1000000);
    $words = ['студент', 'студента', 'студентов'];
    $lastValueWords = substr($studentsCount, -2);
    $wordForm = '';

    if($lastValueWords > 10 && $lastValueWords < 15) {
        $wordForm = $words[2];
    } else {
        $lastValueWords = substr($lastValueWords, -1);
        if ($lastValueWords == 1) {
            $wordForm = $words[0];
        } elseif ($lastValueWords > 1 && $lastValueWords < 5) {
            $wordForm = $words[1];
        } else {
            $wordForm = $words[2];
        }
    }

    var_dump("На учёбе {$studentsCount} {$wordForm}");
    ?>
</pre>

