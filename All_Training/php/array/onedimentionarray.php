<?php
$age = array("Peter"=>"35","Ben"=>"37","Joe"=>"43");//This is One dimention array 
echo "Peter is " .$age['Peter']."year old ";




$salary = array("ambikesh"=>"20000","gautam"=>"40000","suraj"=>"60000");
foreach($salary as $x=> $x_value){
    echo "Key =".$x.",value=" . $x_value;
    echo"<br/>";

}
echo "".$salary['ambikesh'];
$salary = array("ambikesh"=>"20000","gautam"=>"40000","suraj"=>"60000");
foreach($salary as $x=>$value){
    echo "<br/>".$value;
}
echo"<br/><br/>===============================<br/><br/>";
$employee = array
(
    array("ambikeh",2000,4000),          
    array("gautam",400,200),
    array("suraj",400,300),
    array("suyash",300,500)
);
// for($row=0; $row<4; $row++){
   
// for($col=0; $col<3; $col++){
//     echo $employee[$row][$col]." ";
    
// } 
// echo "<br/>";

// // }
echo "<table border='2px' cellpadding='5px' cellspacing='0' >";
foreach($employee as $value){
    echo "<tr>";
    foreach($value as $v1)
    {
        echo"<td>". $v1 . "</td>";
    }
    echo "</tr>";
}
echo"</table>";
// $ambifamily = array("ambikesh"=>array("father"=>"rmbjn"),
//                     "rohit" => array("friend"=>"rohit",
//                                      "mother"=>"vimla"),
//                     "deepmala"=> array("sister"=>"deepmala")
// );
// foreach($ambifamily as $key=>$value){
//     foreach($value as $relationship=>$person){
//         echo"{$key} has a {$relationship} named {$person} <br/>";

//     }
// }        //array   key       value
// $family = array("madhubal"=>array("father"=>"rambhajanPrasad",
//                                   "mother"=>"vimladevi",
//                                   "sister"=>"deepmala",
//                                   "brother"=>"ambikesh",
//                                   "littilesiter"=>"suknya"),
                
//                 "rohit"=>array("father"=>"papa",
//                                 "mother"=>"mom",
//                                 "sister"=>"bahan" ),
//                 "shashikant"=>array("father"=>"gyaprasad",
//                                     "mother"=>"kamladevi",
//                                     "sister"=>"avntika")
               
// );
// echo"<per>";
// foreach($family as $key=>$member){
//     foreach($member as $relationship=>$person){
//        print_r("{$key} is the key {$relationship} named {$person}<br/>");


//     }
// }
// echo"</per>"

$company = array("emmloyee"=>array("name" =>  array( "firstname" =>"ambikesh",
                                                      "middlename"=>"kumar",
                                                      "lastname"=>"gautam"),                                                  
                                                        "salary"=>array("smallLevel" => "20000"),
                                                        "middlelevel"=>"3000",
                                                        "heighlevel"=>"50000",array("oldemployee"=>"20000000",array("Protector"=>"30000"))
                                                    ),
                  "mainmember"=>array("name"=>array("firstname"=>"abc","lastname"=>"xyz","dinumber"=>"12"))                  
              
            
          );
foreach ($company as $employee => $detail) {
          if(is_array($detail)){
            foreach ($detail as $name => $alltypename) {

              if (is_array($alltypename)) {

                foreach ($alltypename as $salary => $level) {

                    if (is_array($level)) {

                            foreach ($level as $ => $value) {
                              # code...
                            }
                    }
                  # code...
                  }
                # code...
              }
            }
          }

  # code...
}
?>