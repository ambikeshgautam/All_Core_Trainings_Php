$(document).ready(function() {

            var minimum_price = '';
            var maximum_price = '';
            var sort = '';
            var id = '';
            filter_Data();

            function filter_Data() {
                $(".product_clicked").click(function() {
                    var action = "data";
                    var category = get_filter('category');
                    var brand = get_filter('brand');
                    var tag = get_filter('tag');

                    $.ajax({
                        url: "fetch_data.php",
                        method: 'POST',
                        data: { action: action, category: category, brand: brand, minimum_price: minimum_price, maximum_price: maximum_price, tag: tag, sort: sort, id: id },
                        success: function(data) {
                            $(".filter_data").html(data);
                        }
                    });
                });
            }

            function get_filter(class_name) {

                var filter_val = [];

                $('.' + class_name + ':checked').each(function() {
                    filter_val.push($(this).val());
                });

                $('.' + class_name + '').on('click', function() {
                        filter_val.push($(this).val();
                        });
                    return filter_val;
                }


                $('.porduct_checked').click(function() {
                    filter_Data();
                });

                $('.filter-btn').on("click", function() {
                    minimum_price = $('#minamount').val();
                    maximum_price = $('#maxamount').val();
                    filter_Data();
                });

                $('.select-option').on("change", 'sorting', function() {
                    sort = $(this).val();

                    filter_Data();
                });

                $(document).on('click', '.loading-more', function() {
                    id = $('.loading-more').data('id');
                    filter_Data();
                });


            });