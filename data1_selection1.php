<style>
.container {
  height: 70px;
  position: relative;
}

.center {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
</style>


<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//$lines = file('http://e5-cse-cs431fa21s2-53.vmhost.psu.edu/secrets.txt');
#echo '<pre>'; print_r($lines); echo '</pre>';

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

//echo "<br>".print_r($_POST['meal_options'])."<br>";


try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $sql = 'SELECT '.$one.','. $two.','. $three.','. $four.','. $five.','. $six.','. $seven.','. $eight.' FROM '.$table .' where '.$four. ' = "'.$_POST['meal_options'].'"';
    //echo $sql;
	$q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}



?>

<label>Choose a Meal Plan:</label>

<form action="/data/data1_selection1.php" method="post">
<p>What meal plan would you like to select?<br>
<select name="meal_options">
<option value="Seafood">Seafood</option>
<option value="Vegan">Vegan</option>
</select><br>
<input type="submit" name="button" value="Submit"/></form>


<body>
        <div id="container">
            <h2>Current List of Planes</h2>
            <table border=1 cellspacing=5 cellpadding=5>
                <thead>
                    <tr>
                <td><?php echo htmlspecialchars($one) ?></td>
			    <td><?php echo htmlspecialchars($two) ?></td>
			    <td><?php echo htmlspecialchars($three) ?></td>
			    <td><?php echo htmlspecialchars($four) ?></td>
			    <td><?php echo htmlspecialchars($five) ?></td>
			    <td><?php echo htmlspecialchars($six) ?></td>
			    <td><?php echo htmlspecialchars($seven) ?></td>
			    <td><?php echo htmlspecialchars($eight) ?></td>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $q->fetch()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row[$one]) ?></td>
			    <td><?php echo htmlspecialchars($row[$two]) ?></td>
			    <td><?php echo htmlspecialchars($row[$three]) ?></td>
			    <td><?php echo htmlspecialchars($row[$four]) ?></td>
			    <td><?php echo htmlspecialchars($row[$five]) ?></td>
			    <td><?php echo htmlspecialchars($row[$six]) ?></td>
			    <td><?php echo htmlspecialchars($row[$seven]) ?></td>
			    <td><?php echo htmlspecialchars($row[$eight]) ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
			<div class="container">
			<div class="center">

			</div></div>
			<div class="title" align="center">
			<input type=button onClick="location.href='/data/data1.php'"
			 value='Click to Return'>
			</div>


<html>
<head>
  <title>PHP Retrieve Data from MySQL using Drop Down Menu</title>
</head>
<body>
