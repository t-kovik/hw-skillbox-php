<pre>
   <?php

   $library = [
       'authors' => [
           'john_makkormik@example.com' => [
               'name' => 'Джон Маккормик',
               'email' => 'john_makkormik@example.com',
               'yearOfBirth' => '1973',
           ],
           'martin_robert@example.com' => [
               'name' => 'Мартин Роберт',
               'email' => 'martin_robert@example.com',
               'yearOfBirth' => '1985',
           ],
           'steven_king@example.com' => [
               'name' => 'Стивен Кинг',
               'email' => 'steven_king@example.com',
               'yearOfBirth' => '1947',
           ]
       ],
       'books' => [
           [
               'title' => 'Чистый код: создание, анализ и рефакторинг',
               'author' => 'martin_robert@example.com',
               'publicationDate' => '2008'
           ],
           [
               'title' => 'Девять алгоритмов, которые изменили будущее',
               'author' => 'john_makkormik@example.com',
               'publicationDate' => '2014'
           ],
           [
               'title' => 'Идеальный программист',
               'author' => 'martin_robert@example.com',
               'publicationDate' => '1996'
           ],
           [
               'title' => 'Сияние',
               'author' => 'steven_king@example.com',
               'publicationDate' => '1977'
           ],
       ],
   ];

   foreach ($library['books'] as $item) {
       var_dump("Книга {$item['title']}, её написал {$library['authors'][$item['author']]['name']} {$library['authors'][$item['author']]['yearOfBirth']} ({$item['author']})");
   }
   ?>
</pre>

