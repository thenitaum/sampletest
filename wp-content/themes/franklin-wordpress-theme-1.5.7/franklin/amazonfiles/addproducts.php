<?php
	include_once($_SERVER['DOCUMENT_ROOT'].'/campaign/wp-config.php' );
	// fetch ajax request start
	$rowdata = file_get_contents("php://input");
	$data = json_decode($rowdata, true);
	// fetch ajax request end
	//echo json_encode($data);
	//echo $rowdata;
	$count = 0;
	//echo $_SERVER['DOCUMENT_ROOT'];
	global $wpdb;
	for($i=0;$i<count($data);$i++)
	{
		$wpdb->insert( 
			'amazonproducts', 
			array( 
				'title' => $data[$i]['title'], 
				'url' => $data[$i]['url'],
				'img'=>$data[$i]['img'],
				'price'=>$data[$i]['price'] 
			) 
		);
		if($wpdb->insert_id!=false and $wpdb->insert_id!='')
		{
			$count++;
		}
	}
	if($count>0)
	{
		echo $count." product(s) uploaded successfully!";
	}
	else
	{
		echo "No record uploaded!";
	}
?>