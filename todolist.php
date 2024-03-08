<?php
include 'php/tasks.php';
// Start session
session_start();

// Set session variables
$_SESSION['user_id'] = 1;
$_SESSION['username'] = 'Abrar';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>To-Do List</title>
    <link rel="stylesheet" href="http://localhost:8888/PHPCODE/css/index.css" />
    <!-- <link rel="stylesheet" type="text/css" href="/css/index.css"> -->
</head>
<body>
<div class="containerTasks">
    <div class="todo">
        <h2>
            <img src="/images/Checklist-pana.png"> To-Do list
        </h2>

        <h3 id="welcomeUser">Welcome <?php echo $_SESSION['username']; ?></h3>
        <div class="row">
            <table>
                <tr>
                    <td>
                        <!-- The button to open the modal -->
                        <button id="addTaskBtn" class="addnewBtn">Add new task</button>

                        <!-- The Modal -->
                        <div id="myModal" class="modal">
                            <!-- Modal content -->
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <form id="taskForm" method="post" action="">
                                    <div class="form-group">
                                        <label for="Task-name" class="col-form-label">Task name:</label>
                                        <input type="text" placeholder="Task Name" class="form-control" id="taskName" name="taskName">
                                    </div>
                                    <div class="form-group">
                                        <label for="Description-text" class="col-form-label">Description:</label>
                                        <textarea class="form-control" placeholder="Description" id="description" name="description"></textarea>
                                    </div>
                                    <button type="submit" name="addTask" id="submitTaskBtn" class="submit-btn">Add Task</button>
                                </form>
                                <?php
                                
                                ?>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            </div>
            <div class="scrollable-container">
            <ul class="list" id="list-container" style="background: #f8eae4 !important;">
            <div class="scrollable-item"> 
                <?php
                if(isset($_POST['addTask'])) {
                    $taskName = $_POST['taskName'];
                    $description = $_POST['description'];  

                    if(addTask($taskName, $description)) {
                        
                    } else {
                        
                    }
                }
             
                $tasks = gettask();
                if ($tasks !== null && !empty($tasks)) {
                    foreach($tasks as $task) {
                        $checkedClass = $task['completed'] ? 'checked' : '';
                        echo "<li class='$checkedClass'> <h4> {$task['taskName']} </h4>  <p>{$task['description']} </p> </li>";
                    }
                }

            // Destroy session (logout)
            session_destroy();
                ?>
            </div>
		</ul>
        </div>
	</div>
    
</div>
<!--<script src="/JS/addTask.js" type="text/javascript"></script>-->
<script src="http://localhost:8888/PHPCODE/JS/addTask.js" type="text/javascript"></script>
</body>
</html>
