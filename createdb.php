<?php 

 echo "<br>";
//$servername = "localhost";
//$username="root";
//$password = "password";
//$dbname= "student-02";

 $servername = "localhost";
 $username="root";
//$password = "password";
 $dbname= "mydbmile2";

/*
 try {
$conn = new PDO("mysql:host=$servername",$username);
//set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "CREATE DATABaSE MYDBMILE2";

// use exec() because no results are returned

$conn->exec($sql);

echo "Database created";

} catch(PDOException $e) {
echo "Connection failed: " . $e->getMessage();
}
$conn = null;
*/
 
 /*
 echo "<br>";
 Echo "--------------------Create Tables------------------------------";
 echo "<br>";
 
 $servername = "localhost";
 $username="root";
//$password = "password";
 $dbname= "mydbmile2";

try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username);
//set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "CREATE TABLE Room (
    Id Int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	User_Id Int(30) NOT NULL, 
	Room_Id Int(30) NOT NULL,
	Room_msg VARCHAR(30) NOT NULL
	)";
  

// use exec() because no results are returned

$conn->exec($sql);

echo "Table created";

} catch(PDOException $e) {
echo "Connection failed: " . $e->getMessage();
}
$conn = null;

*/

Echo("----------------------------------Insert Values To Table---------------------------------------");
try {
$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "INSERT INTO Room(Id, User_Id, Room_Id, Room_msg)
VALUES ('','2', '2','Whats good man. Wanna play later?')";
// use exec() because no results are returned
$conn->exec($sql);

Echo "Mark has been created";

$sql1= "Select *  from `Room` WHERE 1";

foreach ($conn->query($sql1) as $row) {
echo $row['Id']."\t";
echo $row['User_Id']."\t";
echo $row['Room_Id']."\n";
echo $row['Room_msg']."\n";
echo '<br>';
}

} catch(PDOException $e) {
echo "Connection failed: " . $e->getMessage();
}
$conn = null;  '<br>' . "PDO-01 Connected successfully";







?>