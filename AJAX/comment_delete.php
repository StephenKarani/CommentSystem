<?php
require_once '../defines.php';
if(isset($_POST['task']) && $_POST['task'] == 'comment_delete'){
    require_once MODELS_DIR . 'Comments.php';

    if(class_exists('Comments') && class_exists('Subscribers')){
        if(Comments::delete($_POST['commentId'])){
            echo "true";
        }
    }
    echo "false";
}