$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
});
/* comment for edit tasks*/
$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
});
/*end of comment for edit tasks*/
$('table').DataTables();