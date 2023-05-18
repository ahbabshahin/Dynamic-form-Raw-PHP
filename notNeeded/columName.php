<?php

include "database.php";
    $sql = "SELECT column_name FROM INFORMATION_SCHEMA. COLUMNS.
    WHERE TABLE_NAME = 'info'";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_object($result);
    $name = $row->name;

    // while($row = mysqli_fetch_($result))
    // {

    //     $name = $row->name;
    // }

    echo $name;

?>