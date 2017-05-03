/**
 * Created by abhishek on 22-04-17.
 */
$(function() {

    $('#login-form-link').click(function(e) {
        $("#login-form").delay(100).fadeIn(100);
        $("#register-form").fadeOut(100);
        $('#register-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
    $('#register-form-link').click(function(e) {
        $("#register-form").delay(100).fadeIn(100);
        $("#login-form").fadeOut(100);
        $('#login-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
    $('#UserPhotos').click(function(e) {
        $("#Photos").delay(100).fadeIn(100);
        $("#Music").fadeOut(100);
        $("#Documents").fadeOut(100);
        $("#Others").fadeOut(100);
        $('#UserMusic').removeClass('active');
        $('#UserDocuments').removeClass('active');
        $('#UserOthers').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
    $('#UserMusic').click(function(e) {
        $("#Music").delay(100).fadeIn(100);
        $("#Photos").fadeOut(100);
        $("#Documents").fadeOut(100);
        $("#Others").fadeOut(100);
        $('#UserPhotos').removeClass('active');
        $('#UserDocuments').removeClass('active');
        $('#UserOthers').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
    $('#UserDocuments').click(function(e) {
        $("#Documents").delay(100).fadeIn(100);
        $("#Photos").fadeOut(100);
        $("#Music").fadeOut(100);
        $("#Others").fadeOut(100);
        $('#UserPhotos').removeClass('active');
        $('#UserMusic').removeClass('active');
        $('#UserOthers').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
    $('#UserOthers').click(function(e) {
        $("#Others").delay(100).fadeIn(100);
        $("#Photos").fadeOut(100);
        $("#Documents").fadeOut(100);
        $("#Music").fadeOut(100);
        $('#UserPhotos').removeClass('active');
        $('#UserDocuments').removeClass('active');
        $('#UserMusic').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });


});

