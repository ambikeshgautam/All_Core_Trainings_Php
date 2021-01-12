<?php  
    include('functions.php');

    $jason = file_get_contents('data.json');
    $data = json_decode($jason,1);

    switch($_GET['mode']){
        case "new":
            $time = time();
            $data[$time]['id'] = $time;
            $data[$time]['name'] = $_GET['name'];
            $data[$time]['date_start'] = $time;
            $data[$time]['date_end'] = "";
            $data[$time]['status'] =1;
            save($data);

        break;
        case "tolly":
            $count = 0;
            foreach($data as $task){
                $count = $count +($task['date_end']-$task['date_start']);
            }
            echo time_nice($count);
        break;

        case "build":
            foreach($data as $task){
             ?>   
                <tr>
                    <td><?=$task['name']?></td>
                    <td><?=date_nice($task['date_start'])?></td>
                    <td>
                        <?php
                            if($task['date_end'] != ""){
                                echo date_nice(@$task['end_date']);

                            }
                        ?>
                    </td>
                    <td>
                        <?
                            if($task['date_end']==""){
                                echo time_nice(time()-$task['date_start']);
                            }else{
                                echo time_nice($task['date_end']-$task['date_start']);
                            }
                        ?>
                    </td>
                    <td><button class="btn btn-primary"><?=i('stop');?></button></td>
                    <td><button class="btn btn-danger"><?=i('times');?></button></td>
                </tr>
            <? } 

    break;

    }
?>