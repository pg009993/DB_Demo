<?php
$servername = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "customer_info";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$ssn = $_GET['ssn'];
$password = $_GET['password'];


//get rid of whitespace 
trim($ssn);
trim($password);

//SQL injection: 1' or '1'='1
//Code below ALLOWS SQL injection
$sql = "SELECT * FROM FAKE WHERE password = '" . $password . "' AND ssn = '" . $ssn . "';";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "SSN: " . $row["ssn"]. " Name: " . $row["first_name"]. " " . $row["last_name"]. " E-mail: " .$row["email"] . " Gender: " . $row["gender"] . " Credit Card Number: " . $row["cc_number"] . " Bank: " . $row["cc_vendor"] . "<br>";
    }
} else {
    echo "Sorry. Try Again.";
}

/*
//Code below PREVENTS SQL injection. 
$sql = $pdo->prepare('SELECT * FROM FAKE WHERE ssn = :ssn AND password=:password');

$sql->execute(array('name' => $name));

foreach ($sql as $row) {
	  // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "SSN: " . $row["ssn"]. " Name: " . $row["first_name"]. " " . $row["last_name"]. " E-mail: " .$row["email"] . " Gender: " . $row["gender"] . " Credit Card Number: " . $row["cc_number"] . " Bank: " . $row["cc_vendor"] . "<br>";
    }
} else {
    echo "Sorry. Try Again.";

}
*/


$conn->close();
?>