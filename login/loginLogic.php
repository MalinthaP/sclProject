<?php
    include('/xampp/htdocs/myDocs/sclProject/db/db_conn.php');
    if (isset($_POST['login'])) {
        $username = $_POST['user'];
        $password = $_POST['password'];

        $sql = "select * from login where username = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        if($count == 1){  
            header("location:/myDocs/sclProject/pages/homePageUI.php");
        }  
        else{  
            echo 
            '<script>
                window.location.href = "loginPageUI.php";
                alert("Login failed. Invalid username or password!!")
            </script>';
        }     
    }
    ?>