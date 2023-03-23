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

$r_ray = explode(',',$_POST['$one']);

#echo '<pre>';
#print_r($r_ray);
#echo  '</pre>';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $sql = 'SELECT '.$one.','. $two.','. $three.','. $four.','. $five.','. $six.','. $seven.','. $eight.' FROM '.$table;
    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}
?>

<!DOCTYPE html>

<html>
    <head>
        <title>PHP MySQL Query Data Demo</title>
    </head>
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
				<th>Edit?</th>
                <th>Delete?</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $q->fetch()): 
					
					
					?>
                        <tr>
		<td><?php echo htmlspecialchars($row[$one]) ?></td>
		<td><?php echo htmlspecialchars($row[$two]) ?></td>
		<td><?php echo htmlspecialchars($row[$three]) ?></td>
		<td><?php echo htmlspecialchars($row[$four]) ?></td>
		<td><?php echo htmlspecialchars($row[$five]) ?></td>
		<td><?php echo htmlspecialchars($row[$six]) ?></td>
		<td><?php echo htmlspecialchars($row[$seven]) ?></td>
		<td><?php echo htmlspecialchars($row[$eight]) ?></td>
		<td><?php echo '<form action="/planes/edit.php" method="post"><input type="submit" value="Edit"><input type="hidden" name=$one value="' . htmlspecialchars($row[$one]) . ',' .htmlspecialchars($row[$two]). ',' . htmlspecialchars($row[$three]) . ',' .htmlspecialchars($row[$four]). ','. htmlspecialchars($row[$five]) . ',' .htmlspecialchars($row[$six]). ','. htmlspecialchars($row[$seven]) . ',' .htmlspecialchars($row[$eight]). '"></form>'; ?></td>
		<td><?php echo '<form action="/planes/delete.php" method="post"><input type="submit" value="DELETE"><input type="hidden" name=$one value="' . htmlspecialchars($row[$one]) . '"></form>'; ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
		<br><h2>Edit a plane:</h2>
		<form action="/planes/edit_screen.php" method="post">
			<table>
                <tr><td><?php echo htmlspecialchars($one) ?>:</td><td>
				<input type="int" id=<?php echo htmlspecialchars($one) ?> 
				name=<?php echo htmlspecialchars($one) ?> value=<?php echo htmlspecialchars($r_ray[0]) ?>></td></tr>
				<tr><td><?php echo htmlspecialchars($two) ?>:</td><td>
				<input type="int" id=<?php echo htmlspecialchars($two) ?> 
				name=<?php echo htmlspecialchars($two) ?> value=<?php echo htmlspecialchars($r_ray[1]) ?>></td></tr>
				<tr><td><?php echo htmlspecialchars($three) ?>:</td><td>
				<input type="varchar(25)" id=<?php echo htmlspecialchars($three) ?> 
				name=<?php echo htmlspecialchars($three) ?> value='<?php echo htmlspecialchars($r_ray[2]) ?>'></td></tr>
				<tr><td><?php echo htmlspecialchars($four) ?>:</td><td>
				<input type="text" id=<?php echo htmlspecialchars($four) ?> 
				name=<?php echo htmlspecialchars($four) ?> value=<?php echo htmlspecialchars($r_ray[3]) ?>></td></tr>
				<tr><td><?php echo htmlspecialchars($five) ?>:</td><td>
				<input type="text" id=<?php echo htmlspecialchars($five) ?> 
				name=<?php echo htmlspecialchars($five) ?> value=<?php echo htmlspecialchars($r_ray[4]) ?>></td></tr>
				<tr><td><?php echo htmlspecialchars($six) ?>:</td><td>
				<input type="text" id=<?php echo htmlspecialchars($six) ?> 
				name=<?php echo htmlspecialchars($six) ?> value=<?php echo htmlspecialchars($r_ray[5]) ?>></td></tr>
				<tr><td><?php echo htmlspecialchars($seven) ?>:</td><td>
				<input type="int" id=<?php echo htmlspecialchars($seven) ?> 
				name=<?php echo htmlspecialchars($seven) ?> value=<?php echo htmlspecialchars($r_ray[6]) ?>></td></tr>
				<tr><td><?php echo htmlspecialchars($eight) ?>:</td><td>
				<input type="int" id=<?php echo htmlspecialchars($eight) ?> 
				name=<?php echo htmlspecialchars($eight) ?> value=<?php echo htmlspecialchars($r_ray[7]) ?>></td></tr>

			</table>
			<input type="submit" value="UPDATE">
		</form>
		<br>
		<br><br><br>
	<input type=button onClick="location.href='http://e5-cse-cs431fa21s2-53.vmhost.psu.edu/home.php'"
 	value='Click to Return Home'>
    </body>
</div>
</html>
