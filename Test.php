<?php
// Exercise7

$hostname= "localhost";
$username= "root";
$password= "";
$dbname= "dogs";
$conn = mysqli_connect($hostname, $username, $password,$dbname);

$fname = $_POST["firstname"];
$lname = $_POST["lastname"];
$email = $_POST["email"];

$sql = "INSERT INTO owners (firstname, lastname, email) VALUES ('$fname', '$lname', '$email')";
if (mysqli_query($conn, $sql)) {
  echo "<h1>New record created.<h1>";
} else {
  echo "<h1>Record creation error for: </h1>" .
       "<p>"  . $sql . "</p>" .
       mysqli_error($conn);
}
mysqli_close($conn);
echo  "</body></html>";

echo $fname;
?>