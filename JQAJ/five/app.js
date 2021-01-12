$(document).ready(function() {
    $("button").click(function() {
        //$.post(url,data,callbackfunction)
        $.post('recieve.php', {
                "name": "ambikesh",
                "city": "Lucknow"
            },
            function(data, status) {
                alert("Data:" + data + "\nStatus :" + status);
            });

    });
});