$(document).ready(function() {
    $('#p1').click(function() {
        $('#output').load('one.php');
    });
    $('#p2').click(function() {
        $('#output').load('two.php');
    });
    $('#p3').click(function() {
        $('#output').load('three.php');
    });
});