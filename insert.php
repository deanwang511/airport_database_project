<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$username = 'pfs5146';
$password = '12pass';
$host = 'localhost';
$dbname = 'airport';

$table = 'planes';
$one = 'planeID';
$two = 'seats';
$three = 'size';
$four = 'meal_plan';
$five = 'max_altitude';
$six = 'plane_type';
$seven = 'fuel_capacity';
$eight = 'airlineID';


?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP MySQL Query Data Demo</title>
    </head>
    <body>
		<p>
			<?php 
				echo "Inserting new Plane: " . $_POST[$one] . " " . $_POST[$two] . " " . $_POST[$three] . " " . $_POST[$four] . " " . $_POST[$five] . " " . $_POST[$six] . " " . $_POST[$seven] . " " . $_POST[$eight] . "..."; 
				$sql = 'INSERT INTO '.$table.' (' .$one.','.$two.','.$three.','.$four.','.$five.','.$six.','.$seven.','.$eight.') ';
				$sql = $sql . 'VALUES ("'.$_POST[$one] . '","' . $_POST[$two] . '","' . $_POST[$three] . '","' . $_POST[$four] . '","' . $_POST[$five] . '","' . $_POST[$six] . '","' . $_POST[$seven] . '","' . $_POST[$eight] . '")';
				try {
					$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$conn->exec($sql);
					echo "New record created successfully";
			?>
			<?php
				} catch(PDOException $e) {
					echo $sql . "<br>" . $e->getMessage();
				}
				$conn = null;
			?>
		</p>
<div class="title" align="center">
<input type=button onClick="location.href='/planes/planes.php'"
 value='Click to Return'>
</div>
    </body>
</div>
</html>
