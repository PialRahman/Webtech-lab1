<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$mysqli = new mysqli("localhost", "root", "", "Countryinformation");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT `Division`, `Dis_1`, `Dis_2`, `Dis_3`, `Dis_4`, `Dis_5`, `Dis_6`, `Dis_7`, `Dis_8`, `Dis_9`, `Dis_10`, `Dis_11`, `Dis_12`, `Dis_13` FROM `divisions` WHERE Division =?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($division, $dis1, $dis2, $dis3, $dis4, $dis5, $dis6, $dis7, $dis8, $dis9, $dis10, $dis11, $dis12, $dis13);
$stmt->fetch();
$stmt->close();
echo "<p>" . $dis1 . "</p>";
echo "<p>" . $dis2 . "</p>";
echo "<p>" . $dis3 . "</p>";
echo "<p>" . $dis4 . "</p>";
echo "<p>" . $dis5 . "</p>";
echo "<p>" . $dis6 . "</p>";
echo "<p>" . $dis7 . "</p>";
echo "<p>" . $dis8 . "</p>";
echo "<p>" . $dis9 . "</p>";
echo "<p>" . $dis10 . "</p>";
echo "<p>" . $dis11 . "</p>";
echo "<p>" . $dis12 . "</p>";
echo "<p>" . $dis13 . "</p>";
?>
</body>
</html>