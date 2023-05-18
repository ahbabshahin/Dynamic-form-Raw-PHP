<?php
include "database.php";
include "getFileName.php";

    if (($handle = fopen($filename[2], "r")) !== FALSE) 
    { 
        $str = "";
        $str1 = "";
        $str2 = "";
        $str3 = "";
        $a = "";

        while (($data = fgetcsv($handle,1000,',')) !== FALSE) {
           
          $str.= $data[1]." ";  //name
          $str1.= $data[2]. " "; //type
          $str2.= $data[3]. " "; // radio button value 
          $str3.= $data[1]." ".","; // column name

          if(empty($a)){
            $a = $data[0];
            }

           }

  echo $str2.'<br>';
           $str3 = substr($str3, 0, -1);
           $name = str_word_count($str, 1);
           $type = str_word_count($str1, 1);
           $radio = str_word_count($str2, 1);

           
           //$b = array_search(' password ', $type);
          // $b = array_search('     radio', $type);

          // echo $b;
           
          //   echo '<per>';
          //  print_r($name);
          //  echo '</per>';

        //    echo '<br><br>';

          //  echo '<per>';
          //  print_r($type);
          //  echo '</per>';

        //    echo '<br><br>';

           echo '<per>';
           print_r($radio);
           echo '</per>';

        // for ($i=0; $i < count($type); $i++) { 
        //     echo $type[$i]." ";
        // }
        }
    
        fclose($handle);

?>



