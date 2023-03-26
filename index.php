<?php
require_once "config.php";

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if(mysqli_connect_errno()){
    echo "Error: Failed to connect". mysqli_connect_error();
    exit();
}else{
    $query = "SELECT * FROM tasks";
    $result = mysqli_query($connection, $query);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="column column-50 column-offset-25">
                <h1>Tasks Manager</h1>
                <p>Manage your daily tasks easily and keep yourself up to date.</p>

                <h4>All Tasks</h4>
                <?php
                    if($result->num_rows == 0):
                ?>
                <p>No tasks found</p>
                <?php
                    else:
                ?>
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th>Id</th>
                            <th>Task</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                            while($data = mysqli_fetch_assoc($result)):
                        ?>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td><?php echo $data['id'];?></td>
                            <td><?php echo $data['task'];?></td>
                            <td><?php echo $data['date'];?></td>
                            <td><a href="#" class="button button-clear">Edit</a> |<a href="#" class="button button-clear">Delete</a> |<a href="#" class="button button-clear">Completed</a></td>
                        </tr>

                        <?php
                            endwhile;
                        endif;
                        ?>
                    </tbody>
                </table>
                <form action="index.php" method="GET">
                    <select name="" id="">
                        <option value="1">With Selected</option>
                        <option value="2">All</option>
                    </select>
                    <button type="submit" class="button-primary">Submit</button>
                </form>

                <h3>...</h3>

                <h4>Add Tasks</h4>
                <form action="controller.php" method="POST">
                    <?php
                        if(isset($_GET['added']) && $_GET['added'] == true){
                            echo "<p style='color:#9b4dca;'>Task added successfully &#10004;</p>";
                        }
                    ?>
                    <input type="hidden" name="action" value="add">
                    <label for="">Task</label>
                    <input type="text" name="task" placeholder="Task Details">
                    <label for="">Date</label>
                    <input type="date" name="date">
                    <button type="submit" class="button-primary">Add Task</button>
                </form>
            </div>
        </div>

    </div>
</body>

</html>