<?php
 $x=array(1,2,3,4,5);
 var_dump($x);
 unset($x[3]);
 $y=array_values($x);
 echo "<br>";
 var_dump($y);