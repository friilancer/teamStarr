<?php
	session_start();
	if (!isset($_SESSION["username"])) {
	?>
	<script type="text/javascript">
		window.location = "index.php";
	</script>

	<?php
}
	include "connection.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Team Starr</title>
	<h1>Welcome to Team Starr <?php echo "$_SESSION[username]"; ?></h1>
</head>
<body>

</body>
</html>