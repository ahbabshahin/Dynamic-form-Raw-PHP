<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Dynamic Form</title>
</head>

<body>

    <?php
    include "database.php";
    include "wordCount.php";
    //include "test.php";

    $arr = "";
    $arr1 = "";
    //$array = array();
    ?>

    <div class="container my-5">
        <form action="wForm.php" method="post">
            <?php
            for ($i=0; $i < count($name); $i++) { 
     
                $b = array_search('radio', $type);
               
                if($i == $b)
                {
                   echo' <label for="rdo" class="form-label">'.$name[$i].'</label>';
                    for ($j = 0; $j < count($radio); $j++) { 
                        echo'<div class="form-check">
                        
                        <input class="form-check-input" type="radio" name="rdo" id="rdo" Value="'.$radio[$j].'">
                        <label class="form-check-label" for="rdo"> '.$radio[$j].'
                        </label>
                        </div>';
                    }

                    $arr1 .= "rdo";
               
                }

                else{

                $c = array_search('password', $type);
                if($i == $c){
                    echo '<div class="mb-3">
                    <label for="'.$i.'" class="form-label">'.$name[$i].'</label>
                    <input type="password" class="form-control" name = "'.$i.'" id="'.$i.'" aria-describedby="emailHelp">';
                    $arr .= $i;
                }

                else{
                echo '<div class="mb-3">
                <label for="'.$i.'" class="form-label">'.$name[$i].'</label>
                <input type="'.$type[$i].'" class="form-control" name = "'.$i.'" id="'.$i.'" aria-describedby="emailHelp">';
                $arr .= $i;
                }
                }
            }
            

            echo'<button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>';
    $array = str_split($arr, 1);

    $arr2 = "";
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        for ($i=0; $i < count($array); $i++) { 
            $arr2 .= "'".$_POST[$array[$i]]."',";
        }
       $arr2 .= "'".$_POST[$arr1]."'";
       //echo $arr2. '<br>';

        $sql = "INSERT into $a($str3) value($arr2)";
       // $sql = "INSERT into $a(Username, Password, Gender) value($arr2)";
        $result = mysqli_query($conn, $sql);

        if($result)
           {
               echo'
               <script>
               alert("Insertion successful");
               </script>';
           }

           else {
               echo mysqli_error($conn);
           }
    }
     
    ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>