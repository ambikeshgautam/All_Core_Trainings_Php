$(document).ready(function() {

    $('.').

    filter_data(); //calling here

    function filter_data() { //Definition here

        var action = 'fetch_data'; //this is for general check purpose is action is coming or not 
        var minimum_price = $('#minamount').val(); //get value of minimum price
        var maximum_price = $('#maxamount').val(); //get value of maximum price
        console.log(minimum_price);
        var brand = get_filter('brand');


        // Ajax function
        $.ajax({
            url: "fetch_data.php", //locatin of the folder
            method: "POST", //method by which we are sending
            data: { action: action, minimum_price: minimum_price, maximum_price: maximum_price, brand: brand }, //Binding all Data and sending these all on the "fetch_data.php".
            success: function(response) { //after the Execution of the all query 'fetch_data.php' will return in this functino 
                $('.filter_data').html(response);
                //class of Div where it will show
            }
        });
    }

    function get_filter(class_name) { //
        var filter = []; // it will store all check box 'clicked' value .
        $('.' + class_name + ':clicked').each(function() { //if it will clicked then push check value .
            filter.push($(this).val()); //pushing all the value Which are comming by the Check Box .
        });
        return filter; //return where it has called
    }




});