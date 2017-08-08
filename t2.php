<?php

header('content-type:text/html;charset="utf-8"');

// var arr = [{name:'阿飞',age:18} , {name:'excel',age:38}];

$arr = array(
    array('pic'=>'1.jpg' ),
    array('pic'=>'2.jpg' ),
    array('pic'=>'3.jpg' ),
    array('pic'=>'4.jpg' ),
    array('pic'=>'5.jpg' ),
    array('pic'=>'2.jpg' ),
    array('pic'=>'5.jpg' ),
    array('pic'=>'2.jpg' ),
    array('pic'=>'3.jpg' ),
    array('pic'=>'4.jpg' ),
    array('pic'=>'5.jpg' ),
    array('pic'=>'2.jpg' ),
    array('pic'=>'1.jpg' ),
    array('pic'=>'2.jpg' ),
    array('pic'=>'3.jpg' ),
    array('pic'=>'4.jpg' ),
    array('pic'=>'1.jpg' ),
    array('pic'=>'2.jpg' ),
    array('pic'=>'3.jpg' ),
    array('pic'=>'4.jpg' ),
    array('pic'=>'5.jpg' ),
    array('pic'=>'2.jpg' ),
);

echo json_encode($arr);

?>