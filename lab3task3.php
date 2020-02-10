
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
?>
Date of Birth: <br>
dd <br><input type="text" name="a" required>
mm 
<input type="text" name="c" required>
yy 
 <input type="text" name="d" required><br>
<button type="submit" value="Submit">Submit</button>


</body>
</html>
<?php
if(isset(($_POST['a']))){
	echo $_POST['a'];
}
?>