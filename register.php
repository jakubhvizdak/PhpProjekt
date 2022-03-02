<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
        <a href="./index.php">Home</a>
        
        <form action="./registerScript.php" method="POST">
            <label for="username">Meno:</label>
            <input type ="text" name="username" id="username">

            <label for="email">Email:</label>
            <input type ="mail" name="email" id="email">

            <label for="password">Password:</label>
            <input type ="password" name="password" id="password">

            <label for="password_check">Zopakuj heslo:</label>s
            <input type ="password" name="password_check" id="password_check">
            <br>
            <input type="submit" value="Registruj">
</body>
</html>