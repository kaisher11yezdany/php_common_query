<?php

$datetime1 = new DateTime("2010-06-20");

$datetime2 = new DateTime("2011-06-22");

$difference = $datetime1->diff($datetime2);

echo 'Difference: '.$difference->d.' days';

 

?>
