$(document).ready(function() {
    $("button").click(function() {
        $.ajax({
            url: "filetext.txt",
            success: function(result) {
                $("#div1").html(result);
            }
        });
    });
});