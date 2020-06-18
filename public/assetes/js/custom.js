<!--  Menu toggle script-->
$('#menu-toggle').click(function (e) {
    e.preventDefault();
    $("#wrapper").toggleClass("menuDisplayed");
    $(this).html(function(i, v){
        return v === '<i class="fa fa-arrow-left" aria-hidden="true"></i>' ? '<i class="fa fa-arrow-right" aria-hidden="true"></i>' : '<i class="fa fa-arrow-left" aria-hidden="true"></i>'
    });

});
/* comment for edit tasks*/
$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
});
/*end of comment for edit tasks*/