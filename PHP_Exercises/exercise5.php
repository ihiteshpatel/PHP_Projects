<?php
	$jsonData = file_get_contents('dataFile.json');
	$data = json_decode($jsonData);
	foreach ($data as $page) {
		echo "<br> <strong>Name:</strong>".$page->name;
		echo "<br> <strong>Age:</strong>".$page->age;
		echo "<br> <strong>School:</strong>".$page->school;
	}
?>