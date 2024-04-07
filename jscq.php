<?php
// 获取三个 GET 数据，如果没有则置空
$tk = isset($_GET['tk']) ? $_GET['tk'] : '';
$zt = isset($_GET['zt']) ? $_GET['zt'] : '';
$lx = isset($_GET['lx']) ? $_GET['lx'] : '';

// 判断 tk 和 lx 参数是否为空
if ($tk == '' || $lx == '') {
    //http_response_code(400); // 返回 400 错误代码
    echo "错误：tk 和 lx 参数不能为空";
    exit;
}

// 根据 lx 的值决定执行的操作
switch ($lx) {
    case '1':
        // 查询
		// 读取文件 data
		$file_path = 'data';
		if (!file_exists($file_path)) {
			$array_ls = array();
			$serialized_array_ls = serialize($array_ls );
			file_put_contents($file_path, $serialized_array_ls);
		}
		$serialized_array_ls = file_get_contents($file_path);
		$data = unserialize($serialized_array_ls);
		if(isset($data[$tk])){
			echo ($data[$tk]);
		}else{
			echo "没有指定的键值对";
		}
		
        break;
    case '2':
        // 修改或新增
		// 读取文件 data
		$file_path = 'data';
		if (!file_exists($file_path)) {
			$array_ls = array();
			$serialized_array_ls = serialize($array_ls );
			file_put_contents($file_path, $serialized_array_ls);
		}
		$serialized_array_ls = file_get_contents($file_path);
		$data = unserialize($serialized_array_ls);
		
		$data[$tk] = $zt;
		file_put_contents($file_path, serialize($data));
		
		echo ($tk.'|'.$data[$tk]);
        break;
    case '3':
        // 删除
		// 读取文件 data
		$file_path = 'data';
		if (!file_exists($file_path)) {
			$array_ls = array();
			$serialized_array_ls = serialize($array_ls );
			file_put_contents($file_path, $serialized_array_ls);
		}
		$serialized_array_ls = file_get_contents($file_path);
		$data = unserialize($serialized_array_ls);
		
		if(isset($data[$tk])){
			unset($data[$tk]);
			file_put_contents($file_path, serialize($data));
			echo ('已删除|'.$tk);
		}else{
			echo "没有可删除的键值对";
		}

        break;
    case 'allfh3':
        // 返回所有记录
        // 读取文件 data
		$file_path = 'data';
		if (!file_exists($file_path)) {
			$array_ls = array();
			$serialized_array_ls = serialize($array_ls );
			file_put_contents($file_path, $serialized_array_ls);
		}
		$serialized_array_ls = file_get_contents($file_path);
		$data = unserialize($serialized_array_ls);
		
		echo json_encode($data);
        break;
    default:
        //http_response_code(400); // 返回 400 错误代码
        echo "错误：lx 参数值不正确";
        exit;
}


?>