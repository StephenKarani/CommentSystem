$(document).ready(function(){
    add_delete_handler();
});

function add_delete_handler(){
    $('.delete-btn').each(function(){
        var btn = this;
        $(btn).click(function(){
            comment_delete(btn.id);
        });
    });
}

function comment_delete(commentId){
    $.post('AJAX/comment_delete.php',
        {
            task: "comment_delete",
            comment_id: commentId
        }
    ).done(
        function(data){
            console.log(data);
            $('#_' + commentId).detach();
        }
    ).fail(
        function(){
            console.log("Error Occurred while deleting..");
        }
    );
}