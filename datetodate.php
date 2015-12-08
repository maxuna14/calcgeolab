<!DOCTYPE html>
<html>
<head>
	<title>Date To Date</title>
	<meta charset="UTF-8">
</head>
<body>




<form action="" name="" method="GET">
	<p>
		<input type="date" name="date1"/>
	</p>
	<p>
		<input type="date" name="date2"/>
	</p>
	<p>
		<input type="checkbox" name="includelast">შეიცავდეს ბოლო დღეს კალკულატორში.
	</p>
	<p>
		<button type="submit">გამოთვლა</button>
	</p>
</form>
<?php
$date1=date_create($_GET["date1"]);
$date2=date_create($_GET["date2"]);
$diff=date_diff($date1,$date2);

echo "შეიცავს" . " " . $diff->format("%D დღეს") . '</br>';
// print_r($diff);

// $saatebi = $diff * 24;
// $wuTebi = $saatebi * 60;
// $wamebi = $wutebi * 60;

// echo "ალტერნატიული მონაცემები:" . '</br>' . 'საათები:' . $saatebi . $wuTebi . $wamebi;

?>
</body>
</html>