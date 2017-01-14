<?php require_once $_SERVER['DOCUMENT_ROOT']. '/Projects/Comment System/defines.php'; ?>
<?php require_once MODELS_DIR . 'Comments.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Comment Box</title>
        <link href="CSS/Layout.css" rel="stylesheet"/>
        <script type="text/javascript" src="JS/Jquery.js"></script>
        <script type="text/javascript" src="JS/comment_insert.js?t=<?php echo time(); ?>"></script>
        <script type="text/javascript" src="JS/comment_delete.js?t=<?php echo time(); ?>"></script>
        <script type="text/javascript" src="JS/Script.js"></script>
    </head>

    <body>
        <div class="wrapper">
            <div class="page-data">
                Comment System
            </div>
            <div class="comment-wrapper">
                <h3 class="comment-title">User Feedback...</h3>
                <div class="comment-insert">
                    <h3 class="who-says"><span>Says: </span>Stephen Karani</h3>
                    <div class="comment-insert-container">
                        <textarea id="comment-post-text" class="comment-insert-text"></textarea>
                    </div>
                    <div id="comment-post-btn" class="comment-post-btn-wrapper">
                        Post
                    </div>
                </div>
                <div class="comment-list">
                    <ul class="comments-holder-ul">
                        <?php $comments = Comments::getComments(); ?>
                        <?php require_once INCLUDES . 'comment_box.php'; ?>
                    </ul>
                </div>
            </div>
        </div>
        <input type="hidden" id="userId" value="1"/>
        <input type="hidden" id="userName" value="Stephen Karani"/>
    </body>
</html>