<?php 
    //Our YYYY-MM-DD date string.
$date = "2019-10-14";
 
//Get the day of the week using PHP's date function.
$dayOfWeek = date("N", strtotime($date));
 
//Print out the day that our date fell on.
echo $date . ' fell on a ' . $dayOfWeek;
?>