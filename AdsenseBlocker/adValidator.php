<?php
$liveIP = mysql_escape_string($_SERVER['REMOTE_ADDR']);
$sql = "SELECT * FROM ads WHERE ip='$liveIP'";
$result = mysqli_query($con, $sql);
$showAd = true;
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) 
	{
		$showAd = false;
		$deleteDate = strtotime("+5 days", strtotime($row["date"]));
		if(time() > $deleteDate)
		{
			$sql = "DELETE FROM ads WHERE ip='$liveIP'";
			if (mysqli_query($con, $sql)) {} 
			else 
			{
				echo "Error deleting record: " . mysqli_error($con);
			}
			$showAd = true;
		}
    }
}
?>
