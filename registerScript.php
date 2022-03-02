<?php
$validated = true;
$password_match = true;

if( !empty($_POST["username"]))
    {
        echo "Zadal si username. <br>";
    }
else{
    echo "NEzadal si username. <br>";
    $validated = false;
    
}
if( !empty($_POST["email"]))
    {
        echo "Zadal si mail. <br>";
    }
else{
    echo "NEzadal si mail. <br>";
    $validated = false;
}
if( !empty($_POST["password"]))
    {
        echo "Zadal si Heslo. <br>";
    }
else{
    echo "NEzadal si Heslo. <br>";
    $validated = false;
}
if( !empty($_POST["password_check"]))
    {
        echo "Zadal si kontrolne heslo. <br>";
    }
else {
    echo "NEzadal si emailemail <br>";
    $password_match = false;
}

if($_POST["password"] == $_POST["password_check"])
    {
        echo "Hesla sa zhoduju. <br>";
    }
else{
    echo "Hesla sa NEzhoduju. <br>";
}

$hashed_password = password_hash($_POST["password"], PASSWORD_BCRYPT);
echo "Unhashed password = " . $_POST["password"] . "<br>";
echo $hashed_password;


require_once("./Connection.php");
if($password_match && $validated){
    $sql = 'INSERT INTO users(password,email,username) VALUES("'. $_POST["password"] .'","'.$_POST["email"] .'","'.$_POST["username"].'");';

    if ($conn->query($sql) === TRUE) {
        echo "New record created succesfully";
    }
       else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
}