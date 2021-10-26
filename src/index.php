<?php
 
include_once "./Day.php";

$meeting = new Meeting();
$personal = new Personal();

$personalDay = new Day($personal);
$dayMeeting = new Day($meeting);

$weekday = 2;

echo $dayMeeting->getDay($weekday).'</br>';
echo $personalDay->getDay($weekday);