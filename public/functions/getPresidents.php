<?php

  $csvFile = fopen('data/presidents.csv', 'r');
  $data = [];
  
  $header = fgetcsv($csvFile);

  echo "<tr>";

  foreach($header as $val) {
  	echo "<th>" . $val . "</th>";
  }

  echo "</tr>";

  while ($row = fgetcsv($csvFile)) {
  	echo "<tr>";
  	
  	foreach($row as $val) {
  		echo "<td>" . $val . "</td>";
  	}

  	echo "</tr>";
  }

 ?>