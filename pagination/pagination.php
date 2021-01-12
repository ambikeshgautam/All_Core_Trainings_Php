<?php
$connect  =  mysqli_connect("localhost","root","","pagination");
$record_per_page = 5;
$page = "";
$output = "";
if(isset($_POST['page'])){
    $page = $_POST['page'];

}else{
    $page = 1;

}
$start_form = ($page -1)*$record_per_page;
$query = "SELECT * FROM `student` ORDER BY id ASC LIMIT $start_form,$record_per_page";
$result = mysqli_query($connect,$query);
$output .="
    <table class='tabe'>
        <tr>
            <th width='50%'>Name</th>
            <th width='50%'>RollNO</th>
            <th width='50%'>Address</th>
        </tr>
    ";
while($row = mysqli_fetch_assoc($result)){
    $output .="
        <tr>
        <td>".$row['name']."</td>
        <td>".$row['rollno']."</td>
        <td>".$row['address']."</td>
        </tr>
    
    
    ";
}
    $output .= "</table> <br/> <div align = 'center'>";
    $page_query = "SELECT * FROM `student` ORDER BY id ASC";
    $page_result = mysqli_query($connect, $page_query);
    @$tatal_records = mysqli_num_rows($page_query);
    $total_pages = ceil($tatal_records/$record_per_page);
    for($i =1; $i<$total_pages; $i++){
        $output = "<span class = 'paginatino_link' style = 'cursor:pointer; padding:6px; border:1px solid #ccc;' id='".$i."'>".$i."</span>";

    }
    echo $output;    

?>