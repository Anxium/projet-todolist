<?php

$todo = $archives = "";

$FILE = 'assets/json/todo.json';
$current = file_get_contents($FILE);
$array = json_decode($current, true);

foreach($array['todo'] as $key => $value) {
    $todo .='
    <div>
        <input type="checkbox" name="todo'.$key.'" value="todo'.$key.'">
        <label for="todo'.$key.'">'.$value.'</label>
    </div>';
}

foreach($array['archives'] as $key => $value) {
    $archives .='
    <div>
        <input type="checkbox" name="archives'.$key.'" value="archives'.$key.'" disabled>
        <label for="archives'.$key.'">'.$value.'</label>
    </div>';
}