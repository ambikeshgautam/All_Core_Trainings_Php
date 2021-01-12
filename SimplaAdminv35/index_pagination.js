$(document).ready(function() {
    function loadTable(page) {
        $.ajax({
            url: "ajax-pagination.php",
            type: "POST",
            data: { page_no: page },
            success: function(data) {
                $("#tab1").html(data);
            }
        });
    }
    loadTable();
    //Pagination code
    $(document).on("click", "#pagination a", function(e) {
        e.preventDefault();
        var page_id = $(this).attr("id");

        loadTable(page_id);
    });
});