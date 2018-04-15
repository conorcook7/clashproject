$(document).ready(function() {
    $(".exit-btn").click(function(){
        var id = $(this).parent().attr("id");
        $('#'.concat(id)).fadeOut(3000);
    });
});