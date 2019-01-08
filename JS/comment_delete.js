$(document).ready(function () {
    add_delete_handlers();
});

function add_delete_handlers() {
    $('.delete-btn').each(function () {
        var btn = this;
        $(btn).click(function () {
            comment_delete(btn.id);
        });
    });
}

function comment_delete(_commentId) {
    $.post(
        'ajax/comment_delete.php',
        {
            task: 'comment_delete',
            commentId: _commentId
        }
    ).then(
        function (data) {
            $('#' + _commentId).detach();
        }
    );
}