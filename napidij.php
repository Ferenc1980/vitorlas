<?php

require_once "config.php";

$strtable="";

    $sql="select nev,tipus,round(dij/utas,0)as 'dij' from hajo order by nev";
    $stmt=$db->query($sql);
    $strtable="<thead><th>Hajó</th><th>Típus</th><th>DÍj/fő</th></thead><tbody>";
    while($row=$stmt->fetch()){
        extract($row);
        $strtable.="<tr><td>{$nev}</td><td>{$tipus}</td><td>{$dij}</td></tr>";
    }
    $strtable.=" </tbody>";


?>
</div>
            <div class="row justify-content-center">
            <div class="table" style="height:300px; overflow:scroll">
            <p><table  class="table-striped table-bordered">    
                    
                    <?=$strtable?>
                    
                </table> 
            </p>
            </div>
</div>

