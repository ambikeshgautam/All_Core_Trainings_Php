$(document).ready(function() {

    filter_data(); //calling here

    function filter_data() { //Definition here


        //********************************** Category **************************** */
        $(".text_filter").on("click", function() {

            action = "data";
            Textvalue = $(this).text();
            $.ajax({
                url: "fetch_data.php",
                method: "POST",
                data: { action: action, Textvalue: Textvalue },
                success: function(response) {
                    $('.filter_data').html(response);
                }
            });

        });
        //**********************************price Range **************************** */
        $("#filter_button").on("click", function() {

            var action = 'data';
            var minimum_price = $('#minamount').val(); //get value of minimum price
            var maximum_price = $('#maxamount').val(); //get value of maximum price

            $.ajax({
                url: "fetch_data.php",
                method: "POST",
                data: { action: action, minimum_price: minimum_price, maximum_price: maximum_price },
                success: function(response) {
                    $('.filter_data').html(response);
                }
            });


        });
        /************************************************ Brand filter ******************************************************************* */
        $(".product_check").click(function() {
            var action = 'data';
            var brand = get_filter('brand');
            $.ajax({
                url: "fetch_data.php", //locatin of the folder
                method: "POST", //method by which we are sending
                data: { action: action, brand: brand }, //Binding all Data and sending these all on the "fetch_data.php".
                success: function(response) { //after the Execution of the all query 'fetch_data.php' will return in this functino 
                    $('.filter_data').html(response);
                    //class of Div where it will show
                }
            });

        });

        //Push Check Boxes into the Array

        function get_filter(text_id) { //
            var filter = []; // it will store all check box 'clicked' value .
            $('#' + text_id + ':checked').each(function() { //if it will clicked then push check value .
                filter.push($(this).val()); //pushing all the value Which are comming by the Check Box .
            });
            return filter; //return where it has called
        }

        /************************************************ Tag filter ******************************************************************* */
        $(".color_filter").on("click", function() {

            action = "data";
            color_text = $(this).text();
            $.ajax({
                url: "fetch_data.php",
                method: "POST",
                data: { action: action, color_text: color_text },
                success: function(response) {
                    $('.filter_data').html(response);
                }
            });

        });

        /************************************************ Tag filter ******************************************************************* */
        $(".tag_filter").on("click", function() {

            action = "data";
            Tag_text = $(this).text();
            $.ajax({
                url: "fetch_data.php",
                method: "POST",
                data: { action: action, Tag_text: Tag_text },
                success: function(response) {
                    $('.filter_data').html(response);
                }
            });

        });
        /************************************************ Tag filter ******************************************************************* */

        $("#sorting").change(function() {
            var seach_id = $(this).val();
            var action = "data";
            $.ajax({
                url: "fetch_data.php",
                method: "POST",
                data: { action: action, seach_id: seach_id },
                success: function(response) {
                    $('.filter_data').html(response);
                }
            });
        });


        var action = "data";
        $.ajax({
            url: "fetch_data.php",
            method: "POST",
            data: { action: action },
            success: function(response) {
                $('.filter_data').html(response);
            }
        });


    }



});