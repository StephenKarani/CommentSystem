<?php
if(isset($_POST['task']) && $_POST['task'] == 'comment_delete') {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/Projects/Comment System/defines.php';
    require_once MODELS_DIR . 'Comments.php';
    $commentId = (int)$_POST['comment_id'];
    if(class_exists('Comments')){
        if(Comments::delete($commentId)){
            echo "Comment Deleted Successfully";
        }else{
            echo "Comment Not Deleted";
        }
    }
}