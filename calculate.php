<?php

header("Content-type: application/json");

// Do a calculation on the server, return the result in JSON

$datetime1 = new DateTime($_REQUEST['date1']);
$datetime2 = new DateTime($_REQUEST['date2']);
$interval = $datetime1->diff($datetime2);

echo json_encode($interval);
