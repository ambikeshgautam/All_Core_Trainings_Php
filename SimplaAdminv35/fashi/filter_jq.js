$(document).ready(function() {

    filter_Data();

    $(".product").click(function() {
        if ($(this).hasClass("tag")) {
            $(".tag").removeClass("tagactive");
            $(this).addClass("tagactive");
        }
        if ($(this).hasClass("category")) {
            $(".category").removeClass("catactive");
            $(this).addClass("catactive");
        }

        filter_Data("1");

    });

    $("select.sorting").on("change", function() {
        filter_Data("1");
    });
    $("select.p-show").on("change", function() {
        filter_Data("1");
    });




    function filter_Data() {


        // var selectedsort = $(".sorting").children("option:selected").val();
        // var selectedpage_no = $(".p-show").children("option:selected").val();
        // var selectedTag = $(".tagactive").text();
        // var selectedCategory = $(".catactive").text();

        // var selectedcolor = $("color:checked").val();
        // var min = $("#minamount").val();
        // var max = $("#maxamount").val();
        // var action = "data";



        // $.ajax({
        //     url: "fetch_data.php",
        //     method: "POST",
        //     data: {
        //         action: "action",
        //         category: selectedCategory,
        //         tag: selectedTag,
        //         sorting: selectedsort,
        //         brand: brand,
        //         pageno: selectedpage_no,
        //         minimum_price: min,
        //         maximum_price: max

        //     },
        //     success: function(response) {
        //         $(".filter_value").html(response);
        //     }
        // });

    }

    function get_filter(class_name) {
        var filter_val = [];
        $('.' + class_name + "checked").each(function() {
            filter_val.push($(this).val());
        });
        return filter_val;
    }


});