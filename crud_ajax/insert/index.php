<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>firstAjx</title>
</head>
<body>
        <div id="error-message"></div>
        <div id="success-message"></div>
       <table>
                <tr>
                    <td id="header">
                        <h1>PHP with Ajax</h1>
                    </td>
                </tr>
                <tr>
                    <form id="addForm">
                        <td id="table-form">
                            Id:- <input type="text" id="id">&nbsp;&nbsp;
                            Name :- <input type="text" id="name">
                            <input type="submit" id="save-button" value="Save">
                        </td>
                    </form>
                </tr>
                <tr>                
                    <td id="table-data">
                    </td>                    
                </tr>
            
        </table>
       
    
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="main.js"></script>

</body>
</html>