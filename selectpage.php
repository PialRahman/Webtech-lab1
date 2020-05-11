<!DOCTYPE html>
<html>
<body>

<h2>Showing Districts of the Divisions</h2>

<form action=""> 
  <select name="divisions" onchange="showDivision(this.value)">
    <option value="">Select a Division:</option>
    <option value="Dhaka">Dhaka</option>
    <option value="Chittagong">Chittagong</option>
    <option value="Barisal">Barisal</option>
            <option value="Khulna">Khulna</option>
                <option value="Rajshahi">Rajshahi</option>
                   <option value="Rangpur">Rangpur</option>
                    <option value="Mymensingh">Mymensingh</option>
                        <option value="Sylhet">Sylhet</option>
  </select>
</form>
<br>
<div id="txtHint">Division info will be listed here...</div>

<script>
function showDivision(str) {
  var xhttp;  
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "information.php?q="+str, true);
  xhttp.send();
}
</script>
</body>
</html>