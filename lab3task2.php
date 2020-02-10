<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action ="" method="post">
Email: <br>
<input type="text" name="bb" > <br>
<button type="submit" value="Submit">Submit</button>
</form>

</body>
</html>
<?php
if(isset(($_POST['bb']))){
	echo $_POST['bb'];
}
?>