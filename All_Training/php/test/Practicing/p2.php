<?php

$detail = array(
    "name"=>array(
        "firstname"=>"ambikesh",
        "middlename"=>"kumar",
        "lastname"=>"gautam",
        "familyname"=>array(

            "fathername"=>"rambhajanPrasad",
            "Mothername"=>"vimladevi",
            "motherralation"=>array(
                "daughtername"=>"deepmala",
                "seconddaughtername"=>"madhubala",
                "thirddaughtername"=>"suknya",
                "daughtereducationdetail"=>array(
                    "bdaughter"=>"she is doingn job in Noida",
                    "mdaughter"=>"she is persuing B.tech in Lucknow",
                    "smalldaughter"=>"She is studing in 9th class"
                )
            )
        )
    ),
    "address"=>array(   
        "localaddress"=>"sitapurroadLucknow",
        "residencialaddress"=>"kusumaha-belhiya",
        "officeaddress"=>"gomtinagar-lucknow"
    )
    );
    // foreach($detail as $k1=>$v1){
    //     foreach($detail[$k1] as $k2=>$v2){
    //         foreach($detail[$k1][$k2] as $k3=>$v3){
    //             foreach($detail[$k1][$k2][$k3] as $k4=>$v4){
    //                 foreach($detail[$k1][$k2][$k3][$k4] as $k5=>$v5){
    //                     echo $k1."<br/>";
    //                     echo $k2."<br/>";
    //                     echo $k3."<br/>";
    //                     echo $k4."<br/>";
    //                     echo $k5."<br/>";
    //                     echo ."<br/>";
    //                     echo $detail[$k1][$k2][$k3][$k4]['bdaughter'];
    //                 }  
    //             }
    //         }
    //     }
    // }
    echo"<prev>";
foreach($detail as $key1=>$value1){
    if(is_array($value1)){
        foreach($value1 as $key2=>$value2){
            if(is_array($value2)){
               foreach($value2 as $key3=>$value3){        
                         if(is_array($value3)){
                                foreach($value3 as $key4=>$value4){
                                    if(is_array($value4)){
                                    foreach($value4 as $key5=>$value5){
                                        echo $key5."=>".$value5."<br>";
                                    }

                                    }else{
                                        echo $key4."=>".$value4."<br>";
                                    }
                                }

                            }else{
                                echo $key3."=>".$value3."<br>";
                            }
                }
             
            }else{
                echo $key2."=>".$value2."<br>";
            }
        }
    }else{
        echo $key1."=>".$value1."<br>";
    }
}
echo"</prev>";



?>