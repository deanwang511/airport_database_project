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
<input type=button onClick="location.href='http://e5-cse-cs431fa21s2-53.vmhost.psu.edu/home.php'"
 	value='Click to Return Home'>
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
		<br><br><br>
    </body>
</div>
</html>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$username = 'pfs5146';
$password = '12pass';
$host = 'localhost';
$dbname = 'airport';

$table = 'p_employee';
$one = 'p_employeeID';
$two = 'salary';
$three = 'job_type';
$four = 'fname';
$five = 'mname';
$six = 'lname';
$seven = 'age';
$eight = 'access_level';
$nine = 'planeID';
$ten = 'airlineID';


try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $sql = 'SELECT '.$one.','. $two.','. $three.','. $four.','. $five.','. $six.','. $seven.','. $eight.','. $nine.','. $ten.' FROM '.$table;
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
            <h2>Current List of Plane Employees</h2>
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
				<td><?php echo htmlspecialchars($nine) ?></td>
			    <td><?php echo htmlspecialchars($ten) ?></td>
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
							<td><?php echo htmlspecialchars($row[$nine]) ?></td>
							<td><?php echo htmlspecialchars($row[$ten]) ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
		<br><br><br>
    </body>
</div>
</html>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$username = 'pfs5146';
$password = '12pass';
$host = 'localhost';
$dbname = 'airport';

$table = 'airline';
$one = 'airlineID';
$two = 'name';
$three = 'number_of_lanes';
$four = 'number_of_flights';


try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $sql = 'SELECT '.$one.','. $two.','. $three.','.$four.' FROM '.$table;
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
            <h2>Current List of Airlines</h2>
            <table border=1 cellspacing=5 cellpadding=5>
                <thead>
                    <tr>
                <td><?php echo htmlspecialchars($one) ?></td>
			    <td><?php echo htmlspecialchars($two) ?></td>
			    <td><?php echo htmlspecialchars($three) ?></td>
				<td><?php echo htmlspecialchars($four) ?></td>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $q->fetch()): ?>
                        <tr>
                             <td><?php echo htmlspecialchars($row[$one]) ?></td>
							<td><?php echo htmlspecialchars($row[$two]) ?></td>
							<td><?php echo htmlspecialchars($row[$three]) ?></td>
							<td><?php echo htmlspecialchars($row[$four]) ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
		<br><br><br>
    </body>
</div>
</html>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$username = 'pfs5146';
$password = '12pass';
$host = 'localhost';
$dbname = 'airport';

$table = 'customer';
$one = 'customerID';
$two = 'fname';
$three = 'mname';
$four = 'lname';
$five = 'seat_number';
$six = 'class';
$seven = 'planeID';
$eight = 'airlineID';

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
            <h2>Current List of Customers</h2>
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
		<br><br><br>
    </body>
</div>
</html>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$username = 'pfs5146';
$password = '12pass';
$host = 'localhost';
$dbname = 'airport';

$table = 'flight_paths';
$one = 'pathID';
$two = 'start_city';
$three = 'end_city';
$four = 'durration';
$five = 'max_altitude';
$six = 'planeID';
$seven = 'isOverseas';
$eight = 'day';

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
            <h2>Current List of Flight Paths</h2>
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
		<br><br><br>
    </body>
</div>
</html>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$username = 'pfs5146';
$password = '12pass';
$host = 'localhost';
$dbname = 'airport';

$table = 'airport';
$one = 'airportID';
$two = 'laneID';
$three = 'day';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $sql = 'SELECT '.$one.','. $two.','. $three.' FROM '.$table;
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
            <h2>Current List of Airports</h2>
            <table border=1 cellspacing=5 cellpadding=5>
                <thead>
                    <tr>
                <td><?php echo htmlspecialchars($one) ?></td>
			    <td><?php echo htmlspecialchars($two) ?></td>
			    <td><?php echo htmlspecialchars($three) ?></td>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $q->fetch()): ?>
                        <tr>
                             <td><?php echo htmlspecialchars($row[$one]) ?></td>
							<td><?php echo htmlspecialchars($row[$two]) ?></td>
							<td><?php echo htmlspecialchars($row[$three]) ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
		<br><br><br>
    </body>
</div>
</html>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$username = 'pfs5146';
$password = '12pass';
$host = 'localhost';
$dbname = 'airport';

$table = 'operational_Hours';
$one = 'day';
$two = 'holiday';
$three = 'open_hours';
$four = 'closing_time';
$five = 'day_of_week';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $sql = 'SELECT '.$one.','. $two.','. $three.','. $four.','. $five.' FROM '.$table;
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
            <h2>Current List of Operational Hours</h2>
            <table border=1 cellspacing=5 cellpadding=5>
                <thead>
                    <tr>
                <td><?php echo htmlspecialchars($one) ?></td>
			    <td><?php echo htmlspecialchars($two) ?></td>
			    <td><?php echo htmlspecialchars($three) ?></td>
			    <td><?php echo htmlspecialchars($four) ?></td>
			    <td><?php echo htmlspecialchars($five) ?></td>
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
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
		<br><br><br>
    </body>
</div>
</html>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$username = 'pfs5146';
$password = '12pass';
$host = 'localhost';
$dbname = 'airport';

$table = 'lane';
$one = 'laneID';
$two = 'plane_type';
$three = 'slot_number';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $sql = 'SELECT '.$one.','. $two.','. $three.' FROM '.$table;
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
            <h2>Current List of Lanes</h2>
            <table border=1 cellspacing=5 cellpadding=5>
                <thead>
                    <tr>
                <td><?php echo htmlspecialchars($one) ?></td>
			    <td><?php echo htmlspecialchars($two) ?></td>
			    <td><?php echo htmlspecialchars($three) ?></td>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $q->fetch()): ?>
                        <tr>
                             <td><?php echo htmlspecialchars($row[$one]) ?></td>
							<td><?php echo htmlspecialchars($row[$two]) ?></td>
							<td><?php echo htmlspecialchars($row[$three]) ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
		<br><br><br>
    </body>
</div>
</html>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$username = 'pfs5146';
$password = '12pass';
$host = 'localhost';
$dbname = 'airport';

$table = 'a_employee';
$one = 'a_employeeID';
$two = 'salary';
$three = 'job_type';
$four = 'fname';
$five = 'mname';
$six = 'lname';
$seven = 'age';
$eight = 'access_level';
$nine = 'airlineID';


try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $sql = 'SELECT '.$one.','. $two.','. $three.','. $four.','. $five.','. $six.','. $seven.','. $eight.','. $nine.' FROM '.$table;
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
            <h2>Current List of Airport Employees</h2>
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
				<td><?php echo htmlspecialchars($nine) ?></td>
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
							<td><?php echo htmlspecialchars($row[$nine]) ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
		<br><br><br>
    </body>
</div>
</html>