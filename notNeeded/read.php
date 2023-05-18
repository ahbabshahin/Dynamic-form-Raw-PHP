<?php
    if (($handle = fopen("info.csv", "r")) !== FALSE) 
    { 
        while (($data = fgetcsv($handle,1000,',')) !== FALSE) {
          $table = $data[0];
          $name =  $data[1];
          $password =  $data[3];
          $sex = $data[5];
           
          
           }
        }
    
    $a = array($name, $password, $sex);

?>