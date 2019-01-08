$(document).ready(function () {
    $('#comment-post-btn').click(function () {
        comment_post_btn_click();
    });
});

function comment_post_btn_click(){
    //Text entered in the text area
    var _comment = $('#comment-post-text').val();
    var _userId = $('#userId').val();
    var _userName = $('#userName').val();
    if(_comment.length > 0 && _userId != null){
        //Proceed with our ajax callback
        $('.comment-insert-container').css('border', '1px solid #e1e1e1');
        $.post(
            './ajax/comment_insert.php',
            {
                task: 'comment_insert',
                userId: _userId,
                comment: _comment
            }
        ).then(
            function (data) {
                comment_insert(jQuery.parseJSON(data));
            }
        );
    } else {
        //the text area is empty
        $('.comment-insert-container').css('border', '1px solid #ff0000');
    }

    //Remove the text from the text area, ready for another comment
    $('#comment-post-text').val("");
}

function comment_insert(data){
    var t = '';
    t += '<li class="comment-holder" id="'+ data.comment.commentId +'">';
    t += '<div class="user-img">';
    t += '<img src="'+ data.user.profile_img +'" class="user-img-pic" alt="">';
    t += '</div>';
    t += '<div class="comment-body">';
    t += '<h3 class="username-field">'+ data.user.userName +'</h3>';
    t += '<div class="comment-text">';
    t += '<p>'+ data.comment.comment +'</p>';
    t += '</div>';
    t += '</div>';
    t += '<div class="comment-buttons-holder">';
    t += '<ul>';
    t += '<li id="'+ data.comment.commentId +'" class="delete-btn">X</li>';
    t += '</ul>';
    t += '</div>';
    t += '</li>';

    $('.comments-holder-ul').prepend(t);

    add_delete_handlers();
}