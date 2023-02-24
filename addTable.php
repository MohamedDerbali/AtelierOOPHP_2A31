<?php
include "table.php";
$tables = [];
if(isset($_POST)&&!empty($_POST)){
    $t = new Table();
    $t->setColor($_POST['color']);
    $t->setWeight($_POST['weight']+0);
    $t->setNbrePieds($_POST['nbre_pieds']+0);
    $t->setFabricationType($_POST['fabrication_type']);
    array_push($tables, $t);
    // print_r($tables);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 style="text-align: center;">Add Table</h1>    
<form method="post" action="addTable.php">
    color:<input type="color" name="color" />
    <br/>
    weight:<input type="number" name="weight" />
    <br/>
    Nbre pieds:<input type="text" name="nbre_pieds" />
    <br/>
    fabricationType : <input type="text" name="fabrication_type"/>
    <br/>
    <button type="submit"> add Table</button>
    </form>

    <?php
    echo '<table border="1">
    <thead>
            <th>color</th>
            <th>weight</th>
            <th>nbre_pieds</th>
            <th>fabrication_type</th>
       </thead><tbody>';
       if(count($tables)!==0){
        for($i=0;$i<sizeof($tables);$i++){
            echo '<tr>
            <td>'.$tables[$i]->getColor().'</td>
            <td>'.$tables[$i]->getWeight().'</td>
            <td>'.$tables[$i]->getNbrePieds().'</td>
            <td>'.$tables[$i]->getFabricationType().'</td>
            </tr>';
        }
       }else{
        echo '<tr><td colspan="6" style="text-align:center;color:red;">no tables found!</td></tr>';
       }
      echo '</tbody>
    </table>'
    ?>
</body>
</html>