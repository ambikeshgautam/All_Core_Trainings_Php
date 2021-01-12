<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Jquery</title>
</head>

<body>
    <div id="results"></div>

    <script>
        $(document).ready(function() {
            LoadData(0);
        });
        function LoadData(pagenum) {
            $.post('index.php?p='+ pagenum, function(response){
                $('#results').html(response);
            });
        }
    </script>


</body>

</html>