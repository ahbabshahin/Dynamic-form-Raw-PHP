<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Database to Form</title>
</head>

<body>

    <?php
    include "database.php";
    include "type.php";
    include "read.php";

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //for ($i=0; $i < $cnt; $i++) { 
            $name = $_POST[0];
            $pass = $_POST[1];
            $sex = $_POST[2];
        //}
       

        $sql = "INSERT into $table value('$name', '$pass', '$sex')";
        $result = mysqli_query($conn, $sql);

        if($result)
        {
            echo'
            <script>
            alert("Insertion successful!");
            </script>';
        }

        else {
            echo'
            <script>
            alert("We are having some problems!");
            </script>';
        }
    }

    ?>

<div class="container my-3">
  <form action = "form.php" method = "post">
  
  <?php

  for ($i=0; $i < $cnt; $i++) { 

    if($a[$i] == "Password"){
    echo'<div class="mb-3">
        <label for="'.$i.'" class="form-label">'.$a[$i].'</label>
        <input type="password" class="form-control" name = "'.$i.'"  id="'.$i.'" aria-describedby="emailHelp">
    </div>';
    }

    else 
    {
        echo'<div class="mb-3">
        <label for="'.$i.'" class="form-label">'.$a[$i].'</label>
        <input type='.$b[$i].' class="form-control" name = "'.$i.'"  id="'.$i.'" aria-describedby="emailHelp">
    </div>';
      
    }
}
 echo '<button type="submit" class="btn btn-primary">Submit</button>

</form>

</div>';

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