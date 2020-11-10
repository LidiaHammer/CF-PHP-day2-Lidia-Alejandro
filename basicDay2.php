<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>basic</title>
  <?php 
  
  $viewer = getenv( "HTTP_USER_AGENT" );
$browser = "An unidentified browser";
if( preg_match( "/MSIE/i", "$viewer" ) )
{
$browser = "Internet Explorer" ;
}
elseif(preg_match('/Chrome/i' , "$viewer"))
{
$browser = "chrome.css";
}
else  if( preg_match( "/Mozilla/i", "$viewer" ))
{
$browser = "Mozilla" ;
}
elseif(preg_match('/Safari/i',"$viewer"))
{
$browser = 'Apple Safari';
}
else if  ( preg_match( "/Mac/i", "$viewer" ) )
{
$platform = "Mac!";
}
echo("<link rel='stylesheet' href='$browser'>");
 
  ?>
</head>
<body>
<!-- Exercise2part1: -->
<!-- <form action="basicDay2.php" method ="POST">
Name: <input type="text"  name="name" />
Surname: <input type ="text" name="surname" />
<input  type="submit" name="submit"  />
</form> -->

<!-- Exercise7part1: -->
<form action="basicDay2.php" method ="post">
   <p>
       <label  for="firstName">First Name:</label>
       <input type="text" name= "firstname" >
   </p >
   <p>
       <label for ="lastName">Last Name:</label>
       <input  type="text" name="lastname"  >
   </p>
   <p>
       <label for= "emailAddress">Email Address:</label>
       <input  type="text" name= "email" >
   </p>
   <input type= "submit" value="Submit">
</form>

  <?php 
// Exercise2part2:
// if( isset($_POST['submit']))
// {
// if( $_POST["name" ] && $_POST["surname"] )
// {
// echo "Welcome " .$_POST['name']. " " .$_POST['surname'];
// }
// elseif (!$_POST["name"] && !$_POST["surname"]){
// echo "Please insert your data";
// }
// elseif (!$_POST["name"] && $_POST["surname"]){
//   echo "Please insert your name";
//   }
// else 
// echo "Please insert your surname";
// }

//  Exercise3:
// function newFunction($num1,$num2)
// {
//   $division = $num1 / $num2;
//   echo "The division is: $division";
// }
// newFunction(20,5);

// Exercise4
$hostname= "localhost";
$username= "root";
$password= "";
$dbname= "dogs";
$conn = mysqli_connect($hostname, $username, $password,$dbname);

// Exercise5
// $sql = "CREATE TABLE owners(
//   user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//   firstname VARCHAR(20) NOT NULL,
//   lastname VARCHAR(20) NOT NULL,
//   email VARCHAR(50),
//   reg_date TIMESTAMP
//   )" ;

// Exercise6
// $sql = "INSERT INTO owners (firstname, lastname, email)
// VALUES ('John', 'Doe', 'john@doe.com')";

// Exercise7part2:
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
</body>
</html>