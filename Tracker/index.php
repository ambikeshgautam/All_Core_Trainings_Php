<?php 
    include('functions.php');

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">   
    <title>Atom Tracker </title>
  </head>
  <body>
        <div class="cotainer-fluid">
            <header class="row">
                <div class="col-xs-6"> 
                    <a href="#">Enter Restore Mode</a>
                </div>
                <div class="col-xs-6 text-right">
                Total Time:- <span id="tolly"></span>
                </div>
            </header>
             <form  id="form-new">
                <div class="row">
                
                        <div class="col-xs-10">
                            <input type="text" class="form-control" id="task" name="task" placeholder="Enter new task name">
                        </div>
                        <div class="col-xs-2">
                            <button type="submit" class="btn btn-block btn-success"><?=i('play')?></button>

                        </div>
                </div>
             </form>
            <hr>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Task</th>
                        <th>Start</th>
                        <th>End</th>
                        <th>Time</th>
                        <th colspan='2'>Conrol</th>                        
                    </tr>
                </thead>
                <tbody id="log">              
            
                </tbody>
            </table>
        </div>
    <!-- Jquery-->
    
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>   
    
    <script src="app.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>