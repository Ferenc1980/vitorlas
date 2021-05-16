<?php
print_r( $_POST);

require_once "config.php";
$msg="";
if(isset($_POST["mentes"])){
    extract($_POST);
    $sql="INSERT INTO `hajo` (`id`, `nev`, `tipus`, `utas`, `dij`) VALUES (NULL, '{$nev}', '{$tipus}', '{$utas}', '{$dij}')";
    echo $sql;
    $stmt=$db->exec($sql);
    if($stmt){
        $msg="Sikeres adatbeírás!";
    }else{
        $msg="HIBA!";
    }
    
}

?>



<h1>Új hajó bevezetése</h1>
<form method="post">
    <input type="text" name="nev" id="" placeholder="Név" required>
    <input type="text" name="tipus" id="" placeholder="Típus"required>
    <input type="text" name="utas" id="" placeholder="Utas"required>
    <input type="number" name="dij" id="" placeholder="Díj"required>
    <input type="submit" name="mentes" value="Mentés">

</form>

<div>

<?=$msg?>

</div>
