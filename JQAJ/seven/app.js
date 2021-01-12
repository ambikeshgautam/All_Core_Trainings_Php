$(document).ready(function() {
    $("button").click(function() {
        $.get("textfile.txt", function(data, status) {
                alert("Data:-" + data + "Status:-" + status);


            }

        );
    });
});