<?php 

    $taskList = file_get_contents('./taskList.json');

    $taskList = json_decode($taskList);

    header('Content-Type: application/json');

    echo json_encode($taskList);
?>