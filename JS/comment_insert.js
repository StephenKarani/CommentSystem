$(document).ready(function(){
    //This will fire once the page has been loaded
    $('#comment-post-btn').click(function(){
        comment_post_btn_click();
    });
});

function comment_post_btn_click(){
    //Text within the text area
    var _comment = $('#comment-post-text').val();
    var _userId = $('#userId').val();
    var _userName = $('#userName').val();

    if(_comment.length > 0 && _userId != null){
        //Proceed with our ajax callback
        $('.comment-insert-container').css('border', '1px solid #E1E1E1');

        $.post('AJAX/comment_insert.php',
            {
                task : "comment_insert",
                userId: _userId,
                comment: _comment
            }
        ).done(
            function(data){
                comment_insert(jQuery.parseJSON(data));
                console.log(data)
            }
        ).fail(
            function(){
                console.log("error")
            }
        );
    }else{
        $('.comment-insert-container').css('border', '1px solid #FF0000');
    }
    //Remove the text from the text area ready for another text
    $('#comment-post-text').val("");
}

function comment_insert(data){
    var t = '';
    t += '<li class="comment-holder" id="_'+ data.comment.comment_id +'">';
    t += '<div class="user-img">';
    t += '<img src="'+ data.user.profile_img +'" class="user-img-pic"/>';
    t += '</div>';
    t += '<div class="comment-body">';
    t += '<h3 class="username-field">'+ data.user.userName +'</h3>';
    t += '<div class="comment-text">'+ data.comment.comment +'</div>';
    t += '</div>';
    t += '<div class="comment-button-holder">';
    t += '<ul>';
    t += '<li id = '+ data.comment.comment_id +' class="delete-btn">X</li>';
    t += '</ul>';
    t += '</div>';
    t += '</li>';

    $('.comments-holder-ul').prepend(t);
    add_delete_handler();
}