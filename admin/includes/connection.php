<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "resturant_db";

    $con = mysqli_connect($host,$username,$password,$dbname);

 if(!$con){
    echo "Connection failed";
}

?>