<?php

header('content-type:text/html;charset="utf-8"');

// var arr = [{name:'sdfs',age:31} , {name:'rte',age:32}];

$arr = array(
    array('name'=>'241' , 'age'=>'11'),
    array('name'=>'dad' , 'age'=>'32'),
    array('name'=>'算法' , 'age'=>'14'),
    array('name'=>'我情' , 'age'=>'34'),
    array('name'=>'sae' , 'age'=>'12'),
    array('name'=>'sds' , 'age'=>'25'),
);

echo json_encode($arr);

?>