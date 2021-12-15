<pre>
    <?php
    $studentsCount = rand(1, 1000000);
    $words = ['студент', 'студента', 'студентов'];
    $lastValueWords = str_split($studentsCount)[count(str_split($studentsCount))-1];
    $wordForm = '';

    switch ($lastValueWords) {
        case 1:  $wordForm = $words[0]; break;
        case 2:
        case 3:
        case 4:  $wordForm = $words[1]; break;
        default: $wordForm = $words[2]; break;
    }

    var_dump("На учёбе {$studentsCount} {$wordForm}");
    ?>
</pre>

