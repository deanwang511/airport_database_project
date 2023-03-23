<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$username = 'pfs5146';
$password = '12pass';
$host = 'localhost';
$dbname = 'airport';


try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $sql =  'select k.day, k.number_of_employees, kk.number_of_customers from 
			(select day, count(r_count) as number_of_employees from 
			(select *, count(*) as r_count
			from
			(select fname, mname, lname, f.day
			from p_employee pe, operational_Hours oh, flight_paths fp, planes p,
			(select oh.day
			from p_employee pe, operational_Hours oh, flight_paths fp, planes p
			where
			oh.day = fp.day and
			p.planeID = fp.planeID and
			pe.planeID = fp.planeID and
			oh.open_hours != 0
			group by oh.day) f
			where f.day = fp.day and p.planeID = fp.planeID and pe.planeID = p.planeID
			group by fname, mname, lname, f.day) u
			group by fname, mname, lname, day) c
			group by day) k,
			(select day, count(r_count) as number_of_customers from 
			(select *, count(*) as r_count
			from
			(select fname, mname, lname, f.day
			from customer pe, operational_Hours oh, flight_paths fp, planes p,
			(select oh.day
			from customer pe, operational_Hours oh, flight_paths fp, planes p
			where
			oh.day = fp.day and
			p.planeID = fp.planeID and
			pe.planeID = fp.planeID and
			oh.open_hours != 0
			group by oh.day) f
			where f.day = fp.day and p.planeID = fp.planeID and pe.planeID = p.planeID
			group by fname, mname, lname, f.day) u
			group by fname, mname, lname, day) c
			group by day) kk';
    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}

//echo '<br>'.print_r($q->fetch()).'<br>'

?>

<!DOCTYPE html>

<html>
<input type=button onClick="location.href='http://e5-cse-cs431fa21s2-53.vmhost.psu.edu/home.php'"
 	value='Click to Return Home'>
</html>

<body>
        <div id="container">
            <h2>Employee and customer count per day</h2>
            <table border=1 cellspacing=5 cellpadding=5>
                <thead>
                    <tr>
                <td>day</td>
			    <td>number_of_employees</td>
			    <td>number_of_customers</td>
				<td>enough employees?</td>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $q->fetch()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row["day"]) ?></td>
							<td><?php echo htmlspecialchars($row['number_of_employees']) ?></td>
							<td><?php echo htmlspecialchars($row['number_of_customers']) ?></td>
							<td><?php if ($row['number_of_employees']>=3*$row['number_of_customers'])
									  {echo 'yes';} 
									   else 
									  {echo 'no';} ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
		<br><br><br>
    </body>
</div>