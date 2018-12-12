<?php

$FILE = 'assets/json/todo.json';

if (isset($_POST['data'])) {

    $result = trim(filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING));
     
    if(empty($result)) {

        echo "La case ne peut pas être vide!";

    } else {

        $current = file_get_contents($FILE);
        $temp = json_decode($current, true);

        $myObj->id = (sizeof($temp))+1;
        $myObj->tache = $result;
        $myObj->do = false;
        array_push($temp, $myObj);

        $jsonData = json_encode($temp);
        file_put_contents($FILE, $jsonData);
        
    }

}