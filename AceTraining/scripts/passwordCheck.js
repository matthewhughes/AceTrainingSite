$(document).ready(function () {
$(function(){
        $("#register").on('submit', function(event){
        $(".error").hide();
        event.preventDefault();
        var passwordVal = $("#password").val();
        var checkVal = $("#password2").val();
        if (passwordVal != checkVal ) {
            alert('Passwords do not match.');
        }
    });
});
});