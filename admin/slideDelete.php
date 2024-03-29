<?php
    // Including necessary functions or configurations
    require '../config/function.php';

    // Retrieving the 'id' parameter from the GET request
    $id = $_GET['id'];

    // Retrieving the slide information from the database based on the provided 'id'
    $res = mysqli_query($conn, "SELECT * FROM pageslide where id=$id");
    if ($row = mysqli_fetch_array($res)) {
        // Storing the filename of the image to be deleted
        $delimage = $row['image'];
    }

    // Deleting the image file from the server
    unlink($folder . $delimage);

    // Deleting the slide from the database
    $result = mysqli_query($conn, "DELETE FROM pageslide WHERE id='$id'");

    // Redirecting back to the slide page with a success message if deletion was successful
    if ($result) {
        header("location:pslide.php?deleted=1");
    } else {
        // If deletion fails, output an error message
        echo "Something went wrong";
    }
?>
