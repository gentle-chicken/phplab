<?php

// php code to Delete data from mysql database

if(isset($_POST['delete']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "test";

    // get id to delete
    $id = $_POST['id'];

    // connect to mysql
    $connect = mysqli_connect($hostname, $username, $password, $databaseName);

    // mysql delete query 
    $query = "DELETE FROM `tbl1` WHERE `id` = $id";

    $result = mysqli_query($connect, $query);

    if($result)
    {
        echo 'Data Deleted';
    }else{
        echo 'Data Not Deleted';
    }
    mysqli_close($connect);
}

?>