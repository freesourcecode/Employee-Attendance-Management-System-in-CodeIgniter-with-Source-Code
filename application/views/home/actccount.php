<?php

$servername="localhost";
$uname="root";
$pass="";
$db="seams_ci";

$conn=mysqli_connect($servername,$uname,$pass,$db);

if(!$conn){
    die("Connection Failed");
}

$sql = "SELECT * FROM employees WHERE status = 1";
                $query = $conn->query($sql);

                echo "$query->num_rows";
?>