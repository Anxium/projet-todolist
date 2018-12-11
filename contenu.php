<?php

$FILE = 'assets/json/todo.json';
$currentData = file_get_contents($FILE);
$array = json_decode($currentData);

var_dump($array);

// $false = $true = "";

// foreach($array as $key => $value) {
//     if($array->do == false) {
//         $false .= $value;
//     } else {
//         $true .= $value;
//     }
// }

// echo '
// <div class="aFaire">
//     <form>'
//         . $false .
//         '<input type="submit" value="Enregistrer" id="regsiter">
//     </form>
// </div>

// <div class="archive">
//     <form>'
//         . $true .
//     '</form>
// </div>';