<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$username = 'pfs5146';
$password = '12pass';
$host =  'localhost';
$dbname =  'airport';

$table = 'planes';
$one = 'planeID';
$two = 'seats';
$three = 'size';
$four = 'meal_plan';
$five = 'max_altitude';
$six = 'plane_type';
$seven = 'fuel_capacity';
$eight = 'airlineID';

$one_p = $_POST[$one];
$two_p = $_POST[$two];
$three_p = $_POST[$three];
$four_p = $_POST[$four];
$five_p = $_POST[$five];
$six_p = $_POST[$six];
$seven_p = $_POST[$seven];
$eight_p = $_POST[$eight];

#echo '<pre>';
#print_r($_POST);
#echo  '</pre>';

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>PHP MySQL Query Data Demo</title>
    </head>
    <body>
		<p>
			<?php 
				echo "Updating Plane: " . $one_p; 
				echo "<br>";
				$sql = 'update '.$table.' set '.$two.' = '.$two_p .','
											   .$three.' = "'.$three_p.'",'
											   .$four.' = "'.$four_p.'",'
										       .$five.' = "'.$five_p.'",'
											   .$six.' = "'.$six_p.'",'
											   .$seven.' = '.$seven_p.','
											   .$eight.' = '.$eight_p.' where '.$one.' = '.$one_p;
				#echo '<pre>';
				#print_r($sql);
				#echo  '</pre>';
				if ($conn->query($sql) === TRUE) {
					  echo "Record updated successfully";
					} else {
					  echo "Error updating record: " . $conn->error;
					}

				$conn->close();
				?>
		</p>
    </body>
<div class="title" align="center">
<input type=button onClick="location.href='/planes/planes.php'"
 value='Click to Return'>
</div>
</html>