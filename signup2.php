<html>
<head>
<style>
h1 {
    background-image: url("aa.jpg");
   
    background-repeat: repeat-x;
    text-align: center;
    font-size: 80px;
    color: white;

}
h2 {
    
    text-align: center;
    font-size: 40px;
  

}

body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: white;
}
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}

</style>
</head>
<body>
<b><h1>
<pre>


WELCOME TO UTTARAKHAND</b><i>
DEVBHOOMI</i>
</pre>
</h1>
<pre>  
                                                                     <img src="a2.jpg" alt="TOURISM LOGO">
</pre>


















<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = $conn->prepare("SELECT name FROM myGuests2 WHERE email=? AND password=?");
$sql->bind_param("ss", $email,$password);


$password = $_POST["psw"];
$email = $_POST["email"];

$sql->execute();
$result = $sql->get_result();

if ($result->num_rows === 0) 
{
echo "<h2>INCORRECT EMAIL OR PASSWORD</h2>";
}
else
{
echo"
<h3>WELCOME TO BOOKING PAGE<h3>	
<br>
<h4>LIST OF PRICES</h4>
<table>
  <tr>
    <th>PASSENGER</th>
    <th>COST(PER DAY IN Rs)</th>
  </tr>
  <tr>
    <td>ELDERLY</td>
    <td>500</td>
  </tr>
  <tr>
    <td>ADULTS</td>
    <td>800</td>
  </tr>
  <tr>
    <td>CHILDREN</td>
    <td>650</td>
  </tr>
 
</table>	



<form name='myForm2' action='http://localhost/signup4.php' method='post'>
  <fieldset>
    <legend>Booking Information:</legend>
    Name of Booking:<br>
    <input type='text' name='fullname' value='Mickey'>
    <br>
    Adults:<br>
  <input type='number' name='adults' value='0' onchange='cost()'>
    <br>
    Elderly:<br>
  <input type='number' name='elderly' value='0' onchange='cost()'>
    <br>
    Children:<br>
  <input type='number' name='children' value='0' onchange='cost()'>
    <br>
    Location to Visit:<br>
  <input type='radio' name='location' value='haridwar' checked> Haidwar<br>
  <input type='radio' name='location' value='kedarnath'> Kedarnath<br>
  <input type='radio' name='location' value='badrinath'> Badrinath<br>
  <input type='radio' name='location' value='rishikesh'> Rishikesh<br>
<br>
    Date of Booking:<br>
  <input type='date' name='booking'>
    <br>
    <input type='submit' value='Submit'>
  </fieldset>
</form>

<p id='para'></p>

<script>
function cost()
{
	 var x = document.forms['myForm2']['adults'].value;
	 var y = document.forms['myForm2']['elderly'].value;
	 var z = document.forms['myForm2']['children'].value;
	document.getElementById('para').innerHTML='TOTAL COST = Rs'+((x*800)+(y*500)+(z*650));
}
</script>
";
}
$sql->close();
$conn->close();
?>
</body>
</html>



