<?php
//测试ajax返回json数据
$data = array(
	array(
		'id'=>1,
		'name'=>'测试1',
		'time'=>date('Y-m-d H:i:s')
	),
	array(
		'id'=>2,
		'name'=>'测试2',
		'time'=>date('Y-m-d H:i:s')
	),
);
exit(json_encode($data));