<?php
session_start();
require_once "../include/db.php";
require_once "../include/tasks.php";
$task = new tasks();
$action = $_GET['action'];
$task_id = $_GET['id'];



switch($action)
{
    case "Add_Task":
    echo $task->AddTask($_SESSION["id"], $_GET['value'], $connect);
    break;
        
    case "Deactivate_Task":
    echo $task->DeactivateTask($task_id, $connect);
    break;
        
    case "SetStar":
    echo $task->SetStar($task_id, $connect);
    break;
        
    case "RemoveStar":
    echo $task->RemoveStar($task_id, $connect);
    break;
    


}
?>