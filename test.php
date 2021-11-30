<?php
//Create a date object out of a string (e.g. from a database):
$date1 = date_create_from_format('d-m-Y', '01-01-2026');

//Create a date object out of today's date:
$date2 = date_create_from_format('d-m-Y', '01-01-2020');

//Create a comparison of the two dates and store it in an array:
$diff = (array)date_diff($date1, $date2);

//Output the array:
echo "<pre>" ;
echo print_r($diff);
echo "</pre>";
?>