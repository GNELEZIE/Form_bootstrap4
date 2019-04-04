<?php

function insertData($db_table,$db_value,$data_value,$db_inconnu,$db){
    
    
       $inser=$db->prepare("INSERT INTO" .$db_table. "(" .$db_value. ") VALUES(" .$db_inconnu. ")");
       $result=$inser->execute($data_value);
    
    return $result;
       
    
    
}

?>