<pre>
   <?php
   $line = 'Student, hello!';
   $counts = [];

   foreach (str_split($line) as $item) {
       $counts[$item]++;
   }

   foreach ($counts as $letter => $count) {
       echo "$letter - $count" . PHP_EOL;
   }
   ?>
</pre>
