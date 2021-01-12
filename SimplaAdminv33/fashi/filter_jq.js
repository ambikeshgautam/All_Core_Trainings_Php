$(document).ready(function() {



    function filterData() {

        //********************************** Category **************************** */
        $(".text_filter").on("click", function() {

            if ($(this).hasClass("category")) {
                $(".category").removeClass("catactive");
                $(this).addClass("catactive");
            }
            filter();
        });
        //**********************************price Range **************************** */
        $("#filter_button").on("click", function() {
            filter();
        });

        function filter() {

            var minimum_price = $('#minamount').val(); //get value of minimum price
            var maximum_price = $('#maxamount').val(); //get value of maximum price
            var brand = get_filter('brand');
            var Tag_text = $(".tagactive").text();
            var Textvalue = $(".catactive").text();
            var color_text = $(".color:checked").val();
            var selectedval = $(".sorting").children("option:selected").val();
            console.log(color_text);


            $.ajax({
                url: "fetch_data.php",
                method: "POST",
                data: {
                    action: "data",
                    minimum_price: minimum_price,
                    maximum_price: maximum_price,
                    brand: brand,
                    Textvalue: Textvalue,
                    Tag_text: Tag_text,
                    color_text: color_text,
                    search_id: selectedval,

                },
                success: function(response) {
                    $('.filter_data').html(response);
                }
            });
        }
        /************************************************ Brand filter ******************************************************************* */
        $(".product_check").click(function() {
            filter();
        });

        //Push Check Boxes into the Array

        function get_filter(text_id) { //
            var filter = []; // it will store all check box 'clicked' value .
            $('.' + text_id + ':checked').each(function() { //if it will clicked then push check value .
                filter.push($(this).val()); //pushing all the value Which are comming by the Check Box .
            });
            return filter; //return where it has called
        }

        /************************************************ color filter ******************************************************************* */
        $(".color_filter").on("click", function() {
            if ($(this).hasClass("color")); {
                $("color").removeClass("colactive");
                $(this).addClass("colactive");
                filter();
            }

        });
        /************************************************ Tag filter ******************************************************************* */
        $(".tag_filter").on("click", function() {
            if ($(this).hasClass("tag")) {
                $(".tag").removeClass("tagactive");
                $(this).addClass("tagactive");
            }
            filter();

        });
        /************************************************ Tag filter ******************************************************************* */
        $(".sorting").change(function() {
            filter();
        });

        $(document).on('click', '.loading-more', function() {
            filter();


        });

    }
    filterData();

});