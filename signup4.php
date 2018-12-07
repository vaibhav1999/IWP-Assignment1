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

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$fullname=$_POST["fullname"];
$elderly=$_POST["elderly"];
$adults=$_POST["adults"];
$children=$_POST["children"];
$location=$_POST["location"];
$booking=$_POST["booking"];



// prepare and bind
$stmt = $conn->prepare("INSERT INTO myGuests3 (fullname, elderly, adults, children, location, booking) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $fullname, $elderly, $adults, $children, $location, $booking);

$stmt->execute();
echo "<h2>BOOKING DONE SUCCESSFULLY</h2>";

$stmt->close();
$conn->close();
?>
</body>
</html>



