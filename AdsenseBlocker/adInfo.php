<?php
$sql = "SELECT * FROM ads";
$result = mysqli_query($con, $sql);
$showAd = true;
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) 
	{
		$ip = mysql_escape_string($row["ip"]);
		if(mysql_escape_string($_SERVER['REMOTE_ADDR']) == $ip) 
		{
			$showAd = false;
			$deleteDate = strtotime("+5 days", strtotime($row["date"]));
			if(time() > $deleteDate)
			{
				$sql = "DELETE FROM ads WHERE ip='$ip'";
				if (mysqli_query($con, $sql)) {} 
				else 
				{
					echo "Error deleting record: " . mysqli_error($con);
				}
				$showAd = true;
			}
		}
    }
}
?>
