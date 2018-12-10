<?php

$dataErr = $message = "";

$FILE = 'assets/json/todo.json';

if (isset($_POST['data'])) {

    $result = trim(filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING));
     
    if(empty($result)) {

        $dataErr = "La case ne peut pas être vide!";

    } else {

        $current = file_get_contents($FILE);
        $tempArray = json_decode($current, true);
        array_push($tempArray["todo"], $result);
        $jsonData = json_encode($tempArray);
        file_put_contents($FILE, $jsonData);
    
        $message = 'Donnée ajoutée avec succès';
        
    }

}