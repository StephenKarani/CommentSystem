<?php require_once 'defines.php'; ?>
<?php require_once MODELS_DIR . 'Comments.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Comment Box</title>
    <link rel="stylesheet" href="css/layout.css" rel="stylesheet" />
    <script type="application/javascript" src="js/jquery.js"></script>
    <script type="application/javascript" src="js/comment_insert.js?t=<?php echo time(); ?>"></script>
    <script type="application/javascript" src="js/comment_delete.js?t=<?php echo time(); ?>"></script>
    <script type="application/javascript" src="js/script.js"></script>
</head>
<body>
<div class="wrapper">
    <div class="page-data">
        <p>Page Data is in here</p>
    </div>
    <div class="comment-wrapper">
        <h3 class="comment-title">User Feedback......</h3>
        <div class="comment-insert">
            <h3 class="who-says"><span>Says:</span> Stephen Karani</h3>
            <div class="comment-insert-container">
                <textarea id="comment-post-text" class="comment-insert-area"></textarea>
            </div>
            <div id="comment-post-btn" class="comment-post-btn-wrapper">
                Post
            </div>
        </div>
        <div class="comments-list">
            <ul class="comments-holder-ul">
                <?php $comments = Comments::getComments(); ?>
                <?php require_once  INCLUDES . 'comment_box.php'; ?>
            </ul>
        </div>
    </div>
</div>
<input type="hidden" id="userId" value="1"/>
<input type="hidden" id="userName" value="Stephen Karani"/>
</body>
</html>
