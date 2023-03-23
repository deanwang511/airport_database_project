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

//echo "<br>".print_r($_POST)."<br>";


if(array_key_exists('$one', $_POST)){
$index = $_POST['$one'];
} else {
$index = '';}


//echo "<br> index = ".print_r($index)."<br>";

?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP MySQL Query Data Demo</title>
    </head>
    <body>
<div class="title" align="center" id='a'>
<input type=button onClick="location.href='/planes/planes.php'"
 value='Click to Return'>
</div>

<br><br>
<div class="title" align="center" id='b'>
<input type=button onClick="location.href='/planes/planes.php'"
 value='Click to cancel'>
</div>
		<p>
			<?php 
				echo '<script language="javascript">document.getElementById("a").style.visibility="hidden";</script>';

				if($index != ''){
				echo "Deleting plane: " . $index . "...";				
				$sql = 'DELETE FROM '.$table.' WHERE '.$one.' = "' . $index . '"';
				try {
					$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$conn->beginTransaction();
					$conn->exec($sql);
				} catch(PDOException $e) {
					echo $sql . "<br>" . $e->getMessage();
				}
				$conn = null;}
			?>
		<div id='el'>
		<br><br>Click to commit:<form method="post">
        <input type="submit" name="button1"
                class="button" value=<?php echo htmlspecialchars($index) ?> />
        </form>
		</div>

		<?php
        if(array_key_exists('button1', $_POST)) {
            button1();
        }
        function button1() {
			echo '<script language="javascript">document.getElementById("el").style.visibility="hidden";document.getElementById("a").style.visibility="visible";document.getElementById("b").style.visibility="hidden";</script>';

			$username = 'pfs5146';
			$password = '12pass';
			$host = 'localhost';
			$dbname = 'airport';
			$table = 'planes';
			$one = 'planeID';
			$index = $_POST['button1'];
			echo "Deleting plane: " . $index . "...";
			$sql = 'DELETE FROM '.$table.' WHERE '.$one.' = "' . $index . '"';
				try {
					$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$conn->beginTransaction();
					$conn->exec($sql);
				} catch(PDOException $e) {
					echo $sql . "<br>" . $e->getMessage();
				}
			$conn->commit();
			echo "<br>"."committed";
        }

    ?>
		</p>
    </body>

