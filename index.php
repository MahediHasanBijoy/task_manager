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
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>1</td>
                            <td>Make Tea</td>
                            <td>2023-03-24</td>
                            <td><a href="#" class="button button-clear">Edit</a> |<a href="#" class="button button-clear">Delete</a> |<a href="#" class="button button-clear">Completed</a></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>1</td>
                            <td>Make Tea</td>
                            <td>2023-03-24</td>
                            <td><a href="#" class="button button-clear">Edit</a> |<a href="#" class="button button-clear">Delete</a> |<a href="#" class="button button-clear">Completed</a></td>
                        </tr>
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
                <form action="#" method="POST">
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