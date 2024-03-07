<?php
      require '../config/function.php';
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (isset($_POST['add-post'])) {
    $author = validate ($_POST['author']);
    $tag = validate ($_POST['tag']);

    if($_FILES['image']['size'] > 0){

        $image = $_FILES[ 'image' ][ 'name' ];
        $imgFileType = strtolower(pathinfo($image, PATHINFO_EXTENSION));
        if($imgFileType != 'jpg' && $imgFileType != 'jpeg' && $imgFileType != 'png'){
            redirect('post-create.php','Sorry, Only JPG, JPEG, PNG images only');
        }
        $path ="uploads/"; // The path to where you want to upload
        $imgExt = pathinfo($img, PATHINFO_EXTENSION);
        $filename = time(). '.' .$imgExt;

        $finalImage = "uploads/". $filename;

    }else{
        $finalImage=NULL;
    }
    
    $title = validate ($_POST['title']);
    $text_body = validate ($_POST['text_body']);
    $date = validate ($_POST['date']);

    $query = "INSERT INTO post (author, tag, image, title, text_body, date) 
                  VALUES ('$author', '$tag', '$image', '$title', '$text_body', '$date')";

    $result = mysqli_query($conn, $query);
     if ($result) {
        if($_FILES['image']['size'] > 0){
            move_uploaded_file($_FILES["image"]["tmp_name"], $path.$filename);
        }
        redirect('post-create.php','Post added successfully!');
     }else{
        redirect('post-create.php','Something  went wrong!');
     }
}


