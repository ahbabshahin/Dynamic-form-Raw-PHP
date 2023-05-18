<?php
include "database.php";

    if (($handle = fopen("info.csv", "r")) !== FALSE) 
    { 
    
        while (($data = fgetcsv($handle,1000,',')) !== FALSE) {
           
            $sql = "CREATE table $data[0]($data[1] $data[2], $data[3] $data[4], $data[5] $data[6])";
            $result = mysqli_query($conn, $sql);

            if($result)
            {
                echo'
                <script>
                alert("Table creation successful");
                </script>';
            }

            else {
                echo mysqli_error($conn);
            }

            echo '<br><br>';

            // echo $data[0].' ' ;
            // echo $data[1]. ' ';
            // echo $data[2]. ' '; 
            // echo $data[3]. ' '; 
            // echo $data[4]. ' '; 
            // echo $data[5]. ' '; 
            // echo $data[6]. '<br>'; 
           }
        }
    
        fclose($handle);

?>

