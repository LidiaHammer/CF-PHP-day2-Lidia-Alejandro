<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $hostname= "localhost";
    $username= "root";
    $password= "";
    $dbname= "dogs";
    $conn = mysqli_connect($hostname, $username, $password,$dbname);
    
    if (!$conn) {
      die("Connection failed: "  . mysqli_connect_error() . "\n");
    }
    


    $sql = "SELECT user_id, firstname, lastname, email FROM owners";
    $result = mysqli_query($conn, $sql);
    // fetch the next row (as long as there are any) into $row
    while($row = mysqli_fetch_assoc($result)) {
        if($row["user_id"] && $row["email"] && $row["firstname"] && $row["lastname"])
         printf("<h4> ID = %s <br> First Name = %s <br>  Last name = %s <br> Email = %s<br><br><h4>", $row["user_id"], $row["firstname"],$row["lastname"], $row["email"]);
}

    ?>
</body>
</html>