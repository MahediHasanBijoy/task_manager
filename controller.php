<?php

require_once "config.php";

$action = $_POST['action'] ?? "";
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);


if(mysqli_connect_errno()){
    echo "Error: Failed to connect". mysqli_connect_error();
    exit();
}else{
    echo "connection established";
}

if(!$action){
    header("location:index.php");
    die();
}else{
    // insert query
    $task = $_POST['task'];
    $date = $_POST['date'];

    if($task && $date){
        $query = "INSERT INTO tasks (task, date) VALUES ('{$task}', '{$date}')";
        
        if(mysqli_query($connection, $query)){
            header("location:index.php?added=true");
            die();
        }else{
            header("location:index.php?error=404");
            die();
        }
    }else{
        header("location:index.php");
        die();
    }
    
}

