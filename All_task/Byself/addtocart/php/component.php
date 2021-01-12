<?php

function  component($productname,$productprice,$productimg){

    $element = "<div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
    <form action=\"index.php\" method=\"post\">
        <div class=\"card shadow\">
            <div> <img src=\"$productimg\" alt=\"Laptop\" class=\"img=fluid card-img-top\">
            </div>
            <div class=\"card-body\">
            <h5 class=\"card-tile\">$productname</h5>
            <h6>
            <i class=\"fas fa-star\"></i>
            </h6>
            <p class=\"cart-text\">
            some quick example text to build onthe card
            </p>
            <h5><small><s class=\"text-secondary\">$519</s></small><span class=\"price\">$productprice</span></h5>
            <button type=\"submit\" name=\"add\"  class=\"btn btn-warning my-3\" > Add to Cart <i class=\"fas-shopping-cart\"></i></button>
            </div>

        </div>
    </form>
</div> ";
echo $element;
}
?>