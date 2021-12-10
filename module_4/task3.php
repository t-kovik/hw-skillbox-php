<pre>
    <?php
    $result1 = [
            'author' => ['ФИО' => 'Стивен Кинг', 'email' => 'sk@mail.ru'],
            'book' => ['Название' => 'Сияние', 'email' => 'sk@mail.ru']
    ];

    var_dump("{$result1['author']['ФИО']} написал книгу, которая называется {$result1['book']['Название']}");
    var_dump("Автор {$result1['author']['ФИО']} ждет ваших отзывов, напишите ему на электронную почту {$result1['author']['email']}");
    ?>
</pre>

