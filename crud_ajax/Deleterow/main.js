$(document).ready(function() {
    //make a function Loadtable
    function loadTable() {
        $.ajax({
            url: "ajax_load.php",
            type: "POST",
            success: function(data) {
                $("#table-data").html(data);
            }
        });
    }
    //call function LoadTable
    loadTable();



    $(document).on("click", ".delete-btn", function() {
        if (confirm("Do  ypu raly want to delete  t his record")) {
            var studentId = $(this).data("id");
            var element = this;

            $.ajax({
                url: "ajax-delete.php",
                type: "POST",
                data: { id: studentId },
                success: function(data) {
                    if (data == 1) {
                        $(element).closest("tr").fadeOut();
                    } else {
                        $("#error-message").html("can't Delete Records.").slideDown();
                        $("#success-message").slideUp();
                    }

                }

            });
        }
    });




});