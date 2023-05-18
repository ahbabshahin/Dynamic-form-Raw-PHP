<?php

include "database.php";
include "read.php";

// Code to collect column number
$sql1 = "SELECT * from info";
$result1 = mysqli_query($conn, $sql1);
$cnt = mysqli_num_fields($result1);

// echo $cnt;
// echo '<br>';

$type = array();
// Code to collect column data type in number
for ($i=0; $i < $cnt; $i++) { 

    $sql = "SELECT DATA_TYPE 
    FROM INFORMATION_SCHEMA.COLUMNS
    WHERE 
        TABLE_NAME = 'info' AND 
        COLUMN_NAME = '.$a[$i].'";

    

    if($result = mysqli_query($conn, $sql)){
        
    while($row = mysqli_fetch_field($result))
    {
    
        $type[$i] = $row->type;
    }
    }
}

// for ($i=0; $i < $cnt; $i++) { 
//     echo $type[$i].'<br>';
// }


$b = array();
// Code to collect column data type in text
for ($i=0; $i < $cnt; $i++) { 
    if($type[$i] == 252 || $type[$i] == 253){
             $b[$i] = "text";   
         }
    else 
        $b[$i] = "number";
}

// for ($i=0; $i < $cnt; $i++) { 
//     echo $b[$i].'<br>';
// }

?>