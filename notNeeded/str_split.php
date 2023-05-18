<?php
include "database.php";

    if (($handle = fopen("newInfo.csv", "r")) !== FALSE) 
    { 
        $str = "";
        $str1 = "";
        $str2 = "";

        while (($data = fgetcsv($handle,1000,',')) !== FALSE) {
           
          $str.= $data[1]." ";  //name
          $str1.= $data[2]. " "; //type
          $str2.= $data[3]. " "; // radio button value 


           }

        //    echo $str. '<br>';
        //    echo $str1. '<br>';
        //    echo $str2. '<br><br>';
        // $str = substr($str, 0, -1);
           $name = str_split($str, 9);
           $type = str_split($str1, 10);
           $radio = str_split($str2, 8);

           
           //$b = array_search(' password ', $type);
          // $b = array_search('     radio', $type);

          // echo $b;
           
        //     echo '<per>';
        //    print_r($name);
        //    echo '</per>';

        //    echo '<br><br>';

        //    echo '<per>';
        //    print_r($type);
        //    echo '</per>';

        //    echo '<br><br>';

        //    echo '<per>';
        //    print_r($radio);
        //    echo '</per>';

        // for ($i=0; $i < count($type); $i++) { 
        //     echo $type[$i]." ";
        // }
        }
    
        fclose($handle);

?>



