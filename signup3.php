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


$sql = $conn->prepare("SELECT name FROM myGuests2 WHERE email=?");
$sql->bind_param("s", $email);









// prepare and bind
$stmt = $conn->prepare("INSERT INTO myGuests2 (name, phone, password, email) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $firstname, $phone, $lastname, $email);


$firstname = $_POST["name"];
$phone= $_POST["phone"];
$lastname = $_POST["psw"];
$email = $_POST["email"];

$sql->execute();
$result = $sql->get_result();

if ($result->num_rows > 0) 
{
echo "<h2>RECORD EXISTS</h2>";
}
else
{
$stmt->execute();
echo "<h2>NEW RECORD CREATED SUCCESSFULLY</h2>";
}
$sql->close();
$stmt->close();
$conn->close();
?>
</body>
</html>



