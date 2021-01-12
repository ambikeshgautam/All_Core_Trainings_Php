
<?php

$products = array(
    "Electronics"=>array(
        "Television"=>array(
            array(
                "id"=>"PR001",
                "name"=>"MAX-001",
                "brand"=>"Samsung"
                ),
            array(
                "id"=>"PR002",
                "name"=>"BIG-301",
                "brand"=>"Bravia"
                ),
            array(
                "id"=>"PR003",
                "name"=>"APL-02",
                "brand"=>"Apple"
                )
            ),
        "Mobile"=>array(
            array(
                "id"=>"PR004",
                "name"=>"GT-1980",
                "brand"=>"Samsung"
                ),
            array(
                "id"=>"PR005",
                "name"=>"IG-5467",
                "brand"=>"Motorola"
                ),    
            array(
                "id"=>"PR006",
                "name"=>"IP-8930",
                "brand"=>"Apple"
                )
            )
        ),
        "Jwellery"=>array(
            "EarRings"=>array(
                array(
                    "id"=>"PR007",
                    "name"=>"ER-001",
                    "brand"=>"Chopard"
                ),
                array(
                    "id"=>"PR008",
                    "name"=>"ER-002",
                    "brand"=>"Mikimoto"
                ),
                array(
                    "id"=>"PR009",
                    "name"=>"ER-003",
                    "brand"=>"Bvlgari"
                )
            ),
            "Necklaces"=>array(
                array(
                    "id"=>"PR010",
                    "name"=>"NK-001",
                    "brand"=>"Piaget"
                ),
                array(
                    "id"=>"PR011",
                    "name"=>"NK-002",
                    "brand"=>"Graff"
                ),
                array(
                    "id"=>"PR012",
                    "name"=>"NK-003",
                    "brand"=>"Tiffany"
                )
            )
        )
    );

foreach($products as $key1=>$value1){
    foreach($products[$key1] as $key2=>$value2){
        foreach($products[$key1][$key2] as $key3=>$value3){
            if($key2=="Mobile"){
                echo "Product-ID: ".$products[$key1][$key2][$key3]["id"]."<br>";
                echo "Product-Name: ".$products[$key1][$key2][$key3]["name"]."<br>";
                echo "Product-Brand: ".$products[$key1][$key2][$key3]["brand"]."<br>";
                echo "Sub-Category : ".$key2."<br>";
                echo "Category: ".$key1."<br>";
                echo "<hr>";
            }
        }
    }
}

foreach($products as $key1=>$value1){//here Products=>array and key=>electronic and jwelry
    foreach($products[$key1] as $key2=>$value2){
        foreach($products[$key1][$key2] as $key3=>$value3){
            if($products[$key1][$key2][$key3]["id"]=="PR003"){
                unset($products[$key1][$key2][$key3]["id"]);
            }
            echo "Product-ID: ".$products[$key1][$key2][$key3]["id"]."<br>";
            echo "Product-Name: ".$products[$key1][$key2][$key3]["name"]."<br>";
            echo "Product-Brand: ".$products[$key1][$key2][$key3]["brand"]."<br>";
            echo "Sub-Category : ".$key2."<br>";
            echo "Category: ".$key1."<br>";
            echo "<hr>";
            
        }
    }
}

foreach($products as $key1=>$value1){//here Products=>array and key=>electronic and jwelry
    foreach($products[$key1] as $key2=>$value2){
        foreach($products[$key1][$key2] as $key3=>$value3){
            if($products[$key1][$key2][$key3]["id"]=="PR001"){
                unset($products[$key1][$key2][$key3]["id"]);
                unset($products[$key1][$key2][$key3]["name"]);
                unset($products[$key1][$key2][$key3]["brand"]);
                continue;
            }
            echo "Product-ID: ".$products[$key1][$key2][$key3]["id"]."<br>";
            echo "Product-Name: ".$products[$key1][$key2][$key3]["name"]."<br>";
            echo "Product-Brand: ".$products[$key1][$key2][$key3]["brand"]."<br>";
            echo "Sub-Category : ".$key2."<br>";
            echo "Category: ".$key1."<br>";
            echo "<hr>";
            
        }
    }
}



?>