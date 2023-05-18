<?php
$i = 0;
$a = array();
$data;

    if (($handle = fopen("newInfo.csv", "r")) !== FALSE) 
    { 
        while (($data = fgetcsv($handle,1000,',')) !== FALSE) {
            //if($i < 4)
               //$a[$i] = $data[$i];
              //echo $data[0]. '<br>';
               echo $data[1]. '<br>';
              //echo $data[2]. '<br>';
             //echo $data[3]. '<br>';
               echo $data[4]. '<br>';
            $b = $data[1];
            $i++;
            }
            echo '<br><br>';
        echo $b;
        }
        // for ($j=0; $j < count($a); $j++) { 
        //     echo $a[$j].'<br>';
        // }
       
        fclose($handle);                
        
       


?>