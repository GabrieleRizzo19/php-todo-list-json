<?php 

    $taskList = file_get_contents('./taskList.json');
    $taskList = json_decode($taskList);

    if(isset($_POST['task'])){
        $taskToAdd = [
            'task' => $_POST['task'],
            'done' => false
        ];
        $taskList[] = $taskToAdd;
        file_put_contents('./taskList.json', json_encode($taskList));
    }

    header('Content-Type: application/json');

    echo json_encode($taskList);
?>