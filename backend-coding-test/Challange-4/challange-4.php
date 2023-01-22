<?php

$associativeArray = array("insurance.txt"=>"Company A", "letter.docx"=>"Company A", "Contract.docx"=>"Company B");

function groupByOwnersService($associativeArray){
    $final_array = [];
    foreach($associativeArray as $key=>$val){
        $final_array[$val][] = $key;
    }

   return $final_array;  
}
print_r(groupByOwnersService($associativeArray));

?>