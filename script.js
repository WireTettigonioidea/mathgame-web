$(document).ready(function () {

    $('#scores').DataTable({
        scrollX: true,
        ajax: 'includes/getScores.php'
    });
});
