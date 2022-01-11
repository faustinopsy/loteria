<?php
include 'dbconn.php';

$data = array("name","email","type","score");
$data_length = count($data);

$type = isset($_REQUEST['type']) == 1 ? $_REQUEST['type'] : '';
$reverse = isset($_REQUEST['reverse']) == 1 ? $_REQUEST['reverse'] : '';
$limit = isset($_REQUEST['limit']) == 10 ? $_REQUEST['limit'] : '';
$order = $reverse == 'true' ? 'ASC' : 'DESC';

if($type != ''){
	$result = mysqli_query($conn, "SELECT * FROM $table WHERE type = '$type' ORDER by score ".$order.", date ASC LIMIT ".$limit);
}else{
	$result = mysqli_query($conn, "SELECT * FROM $table ORDER by score ".$order.", date ASC LIMIT ".$limit);	
}

if($result){
	$result_length = mysqli_num_rows($result); 
	$top_data = '';
	for($i = 0; $i < $result_length; $i++)
	{
		$row = mysqli_fetch_assoc($result);
		$comma = ',';
		if($i == ($result_length-1)){
			$comma = '';	
		}
		
		$table_val = '';
		for($c = 0; $c < $data_length; $c++){
			$commaInner = ',';
			if($c == ($data_length-1)){
				$commaInner = '';	
			}
			$table_val .= '"'.$data[$c].'":"'.$row[$data[$c]].'"'.$commaInner;
		}
		$top_data .= '{ '.$table_val.' }'.$comma;
	}
	
	if($result_length > 0){
		echo '{"status":true, "datas":['.$top_data.']}';
	}else{
		echo '{"status":false}';
	}
}else{
	echo '{"status":false, "error":0}';	
}

// Close connection
mysqli_close($conn);
?>