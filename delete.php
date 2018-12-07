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


<h3>WELCOME TO BOOKING DELETE PAGE<h3>	
<br>
<?php


  $fullname = $_POST["fullname"];
  $location= $_POST["location"];
  $booking = $_POST["booking"];



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = $conn->prepare("SELECT fullname FROM myGuests3 WHERE fullname=? AND location=? AND booking=?");
$sql->bind_param("sss", $fullname, $location, $booking);


$stmt = $conn->prepare("DELETE FROM myGuests3 WHERE fullname=? AND location=? AND booking=?");
$stmt->bind_param("sss", $fullname, $location, $booking);





$sql->execute();
$result = $sql->get_result();
$ans="";
if ($result->num_rows > 0) 
{
$stmt->execute();
$ans="BOOKING SUCCESSFULLY DELETED ";
}
else
{
$ans="BOOKING NOT AVAILABLE";
}
echo $ans;
$sql->close();
$stmt->close();
$conn->close();
?>










</body>
</html>