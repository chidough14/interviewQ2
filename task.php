<?php 
$num = array(1, 3, 6, 4, 1, 2);

//rsort($num);



function getSmallestPositiveInteger($data){
    for($x=0; $x <= count($data); $x++){
        $res = max($data) - $x;
        //$res2 = 0;
        if($data[$x] != $res){
          $res2 = $res;
        }
    }
    
    echo $res2;
}

getSmallestPositiveInteger($num);





?>