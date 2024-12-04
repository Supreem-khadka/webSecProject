<?php
    if(isset($_POST['screenshot'])){
        $url = $_POST["url"];
         
        echo "You provided the url: ".htmlspecialchars($url);
    }
?>