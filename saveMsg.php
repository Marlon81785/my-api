<?php
  
	require('./conn.php');

	$json = file_get_contents('php://input');
	
	$obj = json_decode($json, true);
	

    $phoneNumber = $obj['phone'];
    $phoneSend = $obj['phoneSend'];
	$status = $obj['statusEnvio'];
    $dateTime = $obj['dateTime'];
    $message = $obj['name'];

    require('./sql.php');

	
    if(isset($phoneNumber) && isset($status) && isset($dateTime) && isset($message) && isset($phoneSend)){

        if($validaInsert = mysqli_query($mysqli, $sql)){
            echo json_encode(array(
                'message' => 'ok'
            ));
        }else{
            echo json_encode(array(
                'message' => $sql//'erro, não inserido'
            ));
        }
        
        
        
    }else{
        echo json_encode(array(
            'message' => 'falta informação na mensagem'
        ));
    }
    

?>