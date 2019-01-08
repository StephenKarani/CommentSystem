<?php if(isset($GLOBALS['comments']) && is_array($comments)) : ?>
<?php foreach ($comments as $key => $comment): ?>
<?php $user = Subscribers::getSubscriber($comment->userId); ?>
<li class="comment-holder" id="<?php echo $comment->commentId; ?>">
    <div class="user-img">
        <img src="<?php echo $user->profile_img; ?>" class="user-img-pic" alt="">
    </div>
    <div class="comment-body">
        <h3 class="username-field"><?php echo $user->userName; ?></h3>
        <div class="comment-text">
            <p><?php echo $comment->comment; ?></p>
        </div>
    </div>
    <div class="comment-buttons-holder">
        <ul>
            <li id="<?php echo $comment->commentId; ?>" class="delete-btn">X</li>
        </ul>
    </div>
</li>
<?php endforeach; ?>
<?php endif; ?>