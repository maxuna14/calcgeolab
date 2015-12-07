<!DOCTYPE html>
<html>
<head>
	<title>Date To Date</title>
	<meta charset="UTF-8">
</head>
<body>




<form action="" name="datetodate" method="GET">
	<p>
		<input type="date" name="date1"/>
	</p>
	<p>
		<input type="date" name="date2"/>
	</p>
	<p>
		<label>
			<input type="checkbox" name="includelast" value="yes">შეიცავდეს ბოლო დღეს კალკულატორში.
		</label>
	</p>
	<p>
		<button type="submit">გამოთვლა</button>
	</p>
</form>
<?php
// თარიღის მიღება
$date1=date_create($_GET["date1"]);
$date2=date_create($_GET["date2"]);
// გამოთვლა დღეების რაოდენობის
$diff = $date1->diff($date2)->format("%r%a");
// ბოლო დღის დამატება
if(isset($_GET['includelast']) and $_GET['includelast']=='yes') {
	$diff++;
}
// კონვერტაცია სხვადასხვა ერთეულებში
$saatebi = $diff * '24';
$wuTebi = $diff * '24' * '60';
$wamebi = $diff * 24 * 60 * 60;
echo "შეიცავს" . " " . $diff . " დღეს" . "</br>" . "</br>";

echo "ალტერნატიული მონაცემები:" . '</br>' . 'საათები:' . $saatebi . '</br>' . 'წუთები: ' . $wuTebi . 'წუთი' . '</br>' . 'წამები: ' . $wamebi . 'წამი';


?>
</body>
</html>
