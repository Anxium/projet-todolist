<?php

$FILE = 'assets/json/todo.json';

if (isset($_POST['data'])) {

    $result = trim(filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING));
     
    if(empty($result)) {

        echo "La case ne peut pas être vide!";

    } else {

        $current = file_get_contents($FILE);
        $temp = json_decode($current, true);

        $temp[] = ["id" => (sizeof($temp))+1, "tache" => $result, "do" => false];

        $jsonData = json_encode($temp, JSON_UNESCAPED_UNICODE);
        file_put_contents($FILE, $jsonData);
        
    }

}