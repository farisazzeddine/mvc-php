$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });


});
/* comment for edit tasks*/
$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
});


// JavaScript for label effects only
$(window).load(function(){
    $(".col-3 input").val("");

    $(".input-effect input").focusout(function(){
        if($(this).val() != ""){
            $(this).addClass("has-content");
        }else{
            $(this).removeClass("has-content");
        }
    })



});


