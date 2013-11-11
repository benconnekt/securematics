<?php
include 'dbc.php';

//print_r($_POST); die;
// Filter POST data for harmful code (sanitize)
foreach($_POST as $key => $value) {
	$data[$key] = filter($value);
}

$sql = "INSERT INTO post(title, description, image, category) 
    VALUES ('$data[title]', '$data[description]', '$data[image]', '$data[category]' )";

if (!$res = mysql_query($sql)) die(mysql_error()); 

?>
