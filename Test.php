<?php
// Exercise7

$hostname= "localhost";
$username= "root";
$password= "";
$dbname= "dogs";
$conn = mysqli_connect($hostname, $username, $password,$dbname);

// $fname = $_POST["firstname"];
// $lname = $_POST["lastname"];
// $email = $_POST["email"];

// $sql = "INSERT INTO owners (firstname, lastname, email) VALUES ('$fname', '$lname', '$email')";
// if (mysqli_query($conn, $sql)) {
//   echo "<h1>New record created.<h1>";
// } else {
//   echo "<h1>Record creation error for: </h1>" .
//        "<p>"  . $sql . "</p>" .
//        mysqli_error($conn);
// }
// mysqli_close($conn);
// echo  "</body></html>";

// echo $fname;

//Exercise 8:
$sql = "SELECT * FROM owners";

$result = mysqli_query($conn, $sql);

if($result->num_rows == 0){
  echo "No result";
} elseif ($result->num_rows == 1){
  $row = $result->fetch_assoc();
  echo $row["firstname"];
}else {
  $rows = $result -> fetch_all(MYSQLI_ASSOC);
  foreach($rows as $val){
    echo $val["firstname"] . " " . $val["lastname"] . "<br>";
  }
}


?>