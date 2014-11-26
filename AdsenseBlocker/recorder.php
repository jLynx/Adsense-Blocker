<?php
	require ("../config.php");
	$con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
?>

<?php
$ip = mysql_escape_string($_SERVER['REMOTE_ADDR']);
$sql = "INSERT INTO ads (ip) VALUES ('$ip')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
?>
