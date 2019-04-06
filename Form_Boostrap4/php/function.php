<?php

function insertData($db_table ,$db_value,$db_inconnu ,$data_value ,$db) {
    $reqes= $db->prepare("INSERT INTO ".$db_table."(".$db_value.") VALUES(".$db_inconnu.")");
     $result=$reqes->execute($data_value);
       return $result;
       
    
    
}

?>
