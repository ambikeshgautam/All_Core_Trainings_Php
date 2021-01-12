$(document).ready(function() {
    $('button').click(function() {
        $("#div1").load("textfile.txt", function(responseTxt, statusTxt, xhr) { //response text is the result text , status:true of fasle, xhr is XMLHttp request
            if (statusTxt == "success")
                alert("External content loaded successfully");
            if (statusTxt == "error") {
                alert("Error: " + xhr.status + ": " + xhr.statusText);

            }
        });
    });
});