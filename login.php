<?php
    include("connection.php");
    if(isset($_POST['login'])){
        $username = $_POST["user"];
        $password = $_POST["password"];

        $sql = "select * from login where username = '$username' and password = '$password'";

        $result = mysqli_query($conn,  $sql);
        $count = mysqli_num_rows($result);

        if($count==1){
            header("Location:welcome.php");
        }
        else{
            echo '<script>
            window.location.href = "index.html";
            alert("Login failed. Invalud username or password")
            </script>';
            }
    }


?>