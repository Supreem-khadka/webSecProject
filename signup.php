<?php
    include("connection.php");

    if(isset($_POST['signup'])){
        $username = $_POST['user'];
        $password = $_POST['password'];

        $sql = "INSERT INTO login (username, password) VALUES('$username', '$password')";
        $result = mysqli_query($conn, $sql);

        if($result){
            header("Location:index.html");
        }
        else {
            echo "Error: ".mysqli_error($conn);
        }
    }
?>