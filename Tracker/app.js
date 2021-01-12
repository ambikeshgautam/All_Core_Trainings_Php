$(document).ready(function() {
    $('#form-new').submit(function(event) {
        event.preventDefault(); //PrevenDefault is stop the default action of the element form happening
        var form = $(this);
        //var task = $('#task').val(); //store the value of tast ID which is Entering in the input field
        var data = form.serialize();

        $.ajax({
            url: 'login.php?mode=new',
            data: data

        });
    });
    $('#log').load('login.php?mode=build');
    $("#tolly").load('login.php?mode=tolly');

});