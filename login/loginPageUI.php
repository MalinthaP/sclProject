<!-- connect with db -->
<?php
    include("db_conn.php");
?>
<!-- this file is login page ui -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginPageStyle.css">
    <title>Ashirwada</title>
</head>
<body>
    <div id="form">
        <h1 class="note"> Wellcome! </h1>
        <div class="form-item">
            <form action="loginLogic.php" method="POST" >
                <input type="text" name="user" id="name" placeholder="Enter Username">
                <br>
                <input type="password" name="password" id="password" placeholder="Enter Password">
                <br>
                <input type="submit" value="Login" id="btn" name="login">
            </form>
            
        </div>
    </div>
</body>
</html>
