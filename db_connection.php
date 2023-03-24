<?php
require_once "config.php";

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if(mysqli_connect_errno()){
    echo "Failed to connect". mysqli_connect_error();
    exit();
}

echo "connected.\n";

$sql = "INSERT INTO tasks (task,date) VALUES ('Eat Iftar', '2023-03-24')";
if(mysqli_query($connection, $sql)){
    echo "Inserted record successfully";
}else{
    echo "Error:". $sql. "<br>" . mysqli_error($connection);
}
