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
    }else if(isset($_POST['delete'])){
        $deleteIndex = $_POST['index'];
        array_splice($taskList, $deleteIndex, 1);
        file_put_contents('./taskList.json', json_encode($taskList));
    }else if(isset($_POST['change'])){
        $changeIndex = $_POST['index'];
        $taskList[$changeIndex]["done"] = true;
        // file_put_contents('./taskList.json', json_encode($taskList));
    }

    header('Content-Type: application/json');

    echo json_encode($taskList);
?>