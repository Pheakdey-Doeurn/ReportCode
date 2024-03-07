<?php
    require '../config/function.php';

    $id= $_GET['id'];

    $res = mysqli_query($conn, "SELECT * FROM pageslide where id=$id");
    if ($row = mysqli_fetch_array($res)) {
    $delimage = $row['image'];
    }
    unlink($folder . $delimage);
    $result = mysqli_query($conn, "DELETE  from pageslide WHERE id='$id'");
    if($result){
        header("location:pslide.php?deleted=1");
    }else{
        echo "Something went wrong";
    }
