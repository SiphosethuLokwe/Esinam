function confirmdelete(_this, evt) {
    evt.preventDefault();
    var x = confirm("Are You sure you want to delete?");
    if (x) {
        window.location = "DeletePost.php?id=" + $(_this).attr('data-id');
    }
}

