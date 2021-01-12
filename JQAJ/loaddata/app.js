$(document).ready(function() {
    $("#btnclick").click(function() {
        // $("#loadData").load('content.txt');
        $("#loadData").load('content.html', function() {
            alert('this is Done');
        });
    });
});