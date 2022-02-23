<?php
require 'Connection.php';

$sql = "SELECT id, username, password, avatar FROM Users";
$result = $conn->query($sql);

if($result->num_rows > 0);{
    while($row = $result->fetch_assocs()){
        echo "<b>id: </b>" . $row["id"] . "</br>";
        echo "username: " .$row["username"] . "</br>";
        echo "password: " .$row["password"] . "</br>";
        echo "<img src-'" .$row["avatar"] . "</br>;"

    }
    else{
        echo " 0 results";
    }

}