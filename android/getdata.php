<?php
// database configuration
include 'DatabaseConfig.php';
//creating a new connection object using mysqli 
$conn = new mysqli($servername, $username, $password, $database);
//if there is some error connecting to the database
//with die we will stop the further execution by displaying a message causing the error 
if($conn->connect_error){
die("connection failed: ". $conn->connect_error);
}
// if everything is fine
// creating an array for storing the data
$heroes = array();
// this is our sql query
$sql = "SELECT id, name FROM heroes;";
// creating a statement from the query
$stmt = $conn->prepare($sql);
// excuate that statement stmt
$stmt->execute();
// binding results for that statement
$stmt->bind_result($id, $name);

// looping through all the records
while($stmt->fetch()){
// pushing all fetched data to array
$temp = [
    'id'=>$id,
    'name'=>$name
];
// pushing the array inside the heroes array
array_push($heroes, $temp);
}
// displaying the data in json format
echo json_encode($heroes);

?>