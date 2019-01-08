<?php
    //THE COMMENTED CONSTANTS ARE USED IN MY PERSONAL PROJECT WHERE THE PROJECT IS NOT RUN DIRECTLY ON THE ROOT SERVER
    /*define('PR', 'Projects/AjaxCommentSystem/');
    define('DOC_ROOT', $_SERVER['DOCUMENT_ROOT'] .'/'. PR);*/
    define('DS', DIRECTORY_SEPARATOR);
    define('DOC_ROOT', $_SERVER['DOCUMENT_ROOT'] . DS);
    define('INCLUDES', DOC_ROOT . 'includes' . DS);
    define('MYSQL_DIR', DOC_ROOT . 'mysql' . DS);
    define('MODELS_DIR', DOC_ROOT . 'mysql' . DS . 'models' .DS);

    require_once MYSQL_DIR . 'db_connect.php';