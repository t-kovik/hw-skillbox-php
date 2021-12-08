<pre>
    <?php
    $daysBeforeExam = rand(0, 9);
    $daysToPrepareForExam = rand(0, 9);

    var_dump($daysToPrepareForExam > $daysBeforeExam ? 'Мне крышка' : 'Главное — не расслабляться');

    var_dump($daysToPrepareForExam < $daysBeforeExam ? 'Ууу, ещё успею в дотку поиграть' : 'Успею или не успею');

    var_dump($daysToPrepareForExam == $daysBeforeExam ? 'Впритирочку' : 'Либо все плохо, либо очень плохо');
    ?>
</pre>

