$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
    // $('#lang').on('click', function () {
    //     alert('test');
    //     $('#bg-img').css('direction', 'rtl');
    //
    //
    // });

});
/* comment for edit tasks*/
$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
});
/*end of comment for edit tasks*/
$(document).ready( function () {
    $('#table_id').DataTable();
} );

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
// function initInputBlur() {
//     $('input').on('blur', function(event) {
//         var inputValue = this.value;
//         if (inputValue) {
//             $('label').classList.add('floated');
//         } else {
//             $('label').classList.remove('floated');
//         }
//     });
// }

