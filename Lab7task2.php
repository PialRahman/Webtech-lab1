<!DOCTYPE html>
<html>
<body>

<img src="Company.PNG" alt="company logo" height="70" weight="70">
<p align="right"><a href="Lab7task1.php">Home |</a>
<a href="Lab7task3.php">Log in |</a>
<a href="Lab7task2.php">Registration |</a></p>

<h1>REGISTRATION</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br><hr>
  E-mail: <input type="text" name="email">
  <br><br><hr>
  User Name: <input type="text" name="username">
  <br><br><hr>
  Password:  <input type="text" name="password">
  <br><br><hr>
  Confirm Password: <input type="text" name="confirmpassword">
  <br><br><hr>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
    <label for="dateofbirth">Birthday:</label>
  <input type="date" id="birthday" name="dateofbirth"> 
  <br><br>
  <input type="submit" name="submit" value="Submit">  
  <input type="submit" name="submit" value="Reset">  
</form>

</body>
</html>