<?php

$FILE = 'assets/json/todo.json';
$current = file_get_contents($FILE);

$dataErr = "";

if (isset($_POST['data'])) {

    $result = trim(filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING));

    if(empty($result)) {

        $dataErr = "Une tâche est requise";

    } else {

        $tempArray = json_decode($current, true);
        array_push($tempArray, $result);
        $jsonData = json_encode($tempArray);
        file_put_contents($FILE, $jsonData);
    
        echo 'Donnée ajoutée avec succès';
        
    }

}