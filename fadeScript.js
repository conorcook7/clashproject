/*function fadeFunction1(){
    $('.message').fadeOut(2000);
}
function fadeFunction2(){
    $('#messages').fadeOut(2000);
}
function fadeFunction3(){
    var id = $(this).closest(".regmessage").attr('id');
    alert(id);
    //$('.regmessage').fadeOut(2000);
}*/
$(document).ready(function() {
    $(".exit-btn").click(function(){
        var id = $(this).parent().attr("id");
        $('#'.concat(id)).fadeOut(3000);
    });
});