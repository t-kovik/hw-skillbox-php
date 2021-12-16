
<pre>
   <?php
   $line = 'Student, hello!';
   $counts = [];
   $letterArray = str_split($line);

   for ($i = 0; $i < count($letterArray); $i++) {
       $counts[$letterArray[$i]] = 0;
   }


   foreach ($letterArray as $item) {
       $counts[$item]++;
   }

   foreach ($counts as $letter => $count) {
       echo "$letter - $count" . PHP_EOL;
   }
   ?>
</pre>
