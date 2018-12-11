<?php

$FILE = 'assets/json/todo.json';
$currentData = file_get_contents($FILE);
$array = json_decode($currentData);

$false = $true = "";

foreach($array as $value) {
    if($value->do == false) {
        $false .= '<input type="checkbox" name="'.$value->id.'/> <br/> <label for="'.$value->id.'">'.$value->tache.'</label> <br/>';
    } else {
        $true .= $value->tache . "<br/>";
    }
};

echo '
<div class="aFaire">
    <form>'
        . $false .
        '<input type="submit" value="Enregistrer" id="regsiter">
    </form>
</div>

<div class="archive">
    <form>'
        . $true .
    '</form>
</div>';