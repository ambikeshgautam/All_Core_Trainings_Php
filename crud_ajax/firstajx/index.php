<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>firstAjx</title>
</head>
<body>
        
           <table>
               <tr>
                   <td id="header">
                       <h1>PHP with Ajax</h1>
                   </td>
               </tr>
               <tr>
                   <td id="table-load">
                       <input type="button" id="load-button" value="Load Data">
                   </td>
               </tr>
               <tr>
              
                   <td id="table-data">
                   <table border="1" width="100%" cellspacing ="0" cellspacing = "10px">
                                            

                         </table>
                   </td>
                   
               </tr>
           </table>
    
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script>

        $(document).ready(function(){
            $("#load-button").on("click",function(e){

                $.ajax({
                    url:"ajax_load.php",
                    type:"POST",
                    success: function(data){
                        $("#table-data").html(data);
                    }
                });

            });
        });
        
    </script>

</body>
</html>