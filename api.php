<?php 

    $stringArray = [
        "parola1",
        "parola2",
        "parola3",
        "parola4",
        "parola5",
    ];

    header('Content-Type: application/json');

    echo json_encode($stringArray);

?>