<?php include("header.php") ?>
<?php include("includes/connection.php") ?>
<h1>Welcome bro!</h1>
<?php
	$users = getUsers();
	echo "<table class='table'>";
		echo "<tr>";
			echo "<td>Id</td>";
			echo "<td>Username</td>";
			echo "<td>Firstname</td>";
		echo "</tr>";
	
	foreach ($users as $item) {
		echo "<tr>";
			echo "<td>".$item[0]."</td>";
			echo "<td>".$item[1]."</td>";
			echo "<td>".$item[3]."</td>";
		echo "</tr>";
	}
	echo "</table>";
?>

<?php include("footer.php") ?>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>