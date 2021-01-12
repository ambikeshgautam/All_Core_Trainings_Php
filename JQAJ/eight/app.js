$(document).ready(function() {
    $("button").click(function() {
        $.getJSON('jsonfile.json', function(result) {
            $.each(result, function(i, field) {
                $("div1").append(field + "");
            });
        });
    });
});