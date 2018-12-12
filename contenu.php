<?php

$FILE = 'assets/json/todo.json';
$currentData = file_get_contents($FILE);
$array = json_decode($currentData);

$false = $true = "";

foreach($array as $value) {

    if(isset($_POST['check'])) {
        foreach($_POST['check'] as $val) {
            if($val == $value->id) {
                $value->do = true;
        
                $jsonData = json_encode($array);
                file_put_contents($FILE, $jsonData);
            }
        }
    }

    if($value->do == false) {
        $false .= '<input type="checkbox" name="tache[]" value="'.$value->id.'"/> <label for="'.$value->id.'">'.$value->tache.'</label> <br/>';
    } else {
        $true .= '<input type="checkbox" name="archive[]" value="'.$value->id.'" disabled/> <label class="archives" for="'.$value->id.'">'.$value->tache.'</label> <br/>';
    }

}

echo '
<div class="aFaire">
    <h2>A faire</h2>
    <form method="POST">'
        . $false .
        '<input type="submit" value="Enregistrer" id="register">
    </form>
</div>

<div class="archive">
    <h2>Archives</h2>
    <form method="POST">'
        . $true .
    '</form>
</div>';

