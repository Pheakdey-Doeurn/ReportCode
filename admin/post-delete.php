<?php
require '../config/function.php';

$paraResult = checkParamId('id');
if (is_numeric($paramResult)) {
    $postId = validate($paramResult);

    $post = getById('post', $postId);
    if ($post['status'] == 200) {
        $postDeleteRes = deleteQuery('post', $postId);
        if ($postDeleteRes) {
            $deleteImage = "../" . $post['data']['image'];
            if (file_exists($deleteImage)) {
                unlink($deleteImage);
            }
            redirect('post-view.php', 'Post Deleted Successfully');
        } else {
            redirect('post-view.php', 'Something Went Wrong');
        }
    } else {
        redirect('post_view.php', $post['message']);
    }
} else {
    redirect('post_view.php', $paramResult);
}
