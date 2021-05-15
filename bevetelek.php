
<?php

require_once "config.php";

$lista="";
$strtable="";

    
    $sql="select nev from hajo order by nev";
    $stmt=$db->query($sql);
    
    while($row=$stmt->fetch()){
        extract($row);
        $lista.="<option>{$nev}</option>";
    }
    print_r($_POST);
    
    if(isset($_POST["hajok"]) && $_POST["hajok"]!='0'){
        $id=$_POST["hajok"];
        $sql="select hajo.id,nev,nap*dij as 'bevetel' from tura,hajo where hajo_id=tura.hajo_id && hajo.id='{$id}' group by nev";
        $stmt=$db->query($sql);
        $strtable="<thead><th>Hajó neve</th><th>Bevétel</th></thead><tbody>";
        while($row=$stmt->fetch()){
            extract($row);
            $strtable.="<tr><td>{$nev}</td><td>{$bevetel}</td></tr>";
        }
        $strtable.=" </tbody>";
    
    }
    ?>
    
    
    <h2>Bevétel hajónként</h2>
    
    <form method="post">
                    
                            <select name="hajok">
                                <option value="0">Valassz egy hajót...</option>
                                    <?=$lista?>
                            </select>
                       
                        <input   type="submit" name="elfogad"  value="Bevételt mutat">
                </form> 
    
                <p> <table>    
                        
                        <?=$strtable?>
                        
                        </table> 
                    </p>   