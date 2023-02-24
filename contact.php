<?php 
var_dump($_GET);
//isset
// var_dump($_POST);

echo '<table border="1">
<thead>
        <th>name</th>
        <th>prenom</th>
        <th>email</th>
        <th>phone</th>
        <th>adress</th>
        <th>postalCode</th>
   </thead><tbody>';
   if(isset($_GET["name"])&&!empty($_GET["name"])&&
   isset($_GET["prenom"])&&!empty($_GET["prenom"])&&
   isset($_GET["email"])&&!empty($_GET["email"])&&
   isset($_GET["phone"])&&!empty($_GET["phone"])&&
   isset($_GET["adress"])&&!empty($_GET["adress"])&&
   isset($_GET["postalCode"])&&!empty($_GET["postalCode"])){
    echo   '<tr>
   <td>'.$_GET["name"].'</td>
   <td>'.$_GET["prenom"].'</td>
   <td>'.$_GET["email"].'</td>
   <td>'.$_GET["phone"].'</td>
   <td>'.$_GET["adress"].'</td>
   <td>'.$_GET["postalCode"].'</td>
   </tr>';
   }else{
    echo '<tr><td colspan="6" style="text-align:center;color:red;">champs manquant</td></tr>';
   }
  echo '</tbody>
</table>'
?>




