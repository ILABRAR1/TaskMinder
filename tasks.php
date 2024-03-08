<?php
include 'Database_conn.php';

function addtask($taskName, $description){
    global $conn;
    
    $sql = "INSERT INTO ToDoList (taskName, description) VALUES ('$taskName', '$description')";

    if (mysqli_query($conn, $sql)){
        
    } 
    else {
    }
    mysqli_close($conn);
}

function gettask() {
    global $conn;
    
    $sql = "SELECT * FROM ToDoList";
    $result = mysqli_query($conn, $sql);

    $tasks = array();
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $tasks[] = $row;
        }
    }
    mysqli_close($conn);
    
    return $tasks;
}
function deltask($taskName){
    global $conn;
    $sql = "DELETE FROM ToDoList WHERE taskName = '$taskName' ";
    
    if (mysqli_query($conn, $sql)) {
        return true; 
    } else {
        return false; 
    }
}

?>
