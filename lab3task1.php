<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action ="" method="post">
Name: <br>
<input type="text" name="tt" > <br>
<button type="submit" value="Submit">Submit</button>
</form>

</body>
</html>
<?php
if(isset(($_POST['tt']))){
	echo $_POST['tt'];
}
?>