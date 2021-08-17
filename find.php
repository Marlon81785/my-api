<?php 
    require('./cors.php');
    require('./conn.php');

    $json = file_get_contents('php://input');
	
	$obj = json_decode($json, true);

    $myPhoneNumber = $obj['myPhoneNumber'];

    require('./sql.php');
	
    if(isset($myPhoneNumber)){

        $exec = mysqli_query($mysqli, $findMessageQuery);
        $numRows = mysqli_num_rows($exec);
        
        $lista = array();

        if(mysqli_num_rows($exec) != 0){
            for($i = 0;$i <= $numRows;$i++){
                if($execAssoc = mysqli_fetch_assoc($exec)){
                    $lista[] = array(
                        'phoneSend' => $execAssoc['phoneSend'],
                        'mensagem' => $execAssoc['mensagem']
                    );
                }
            }
            if($isDelete = mysqli_query($mysqli, $deleteMessageQuery)){
                echo json_encode(array(
                    'message' => $lista
                ));
            }
            
            
        }else{
            echo json_encode(array(
                'message' => '0'//não encontrou mensagem,
            ));
        }
    }else{
        echo json_encode(array(
            'message' => 'nao passou parametro',
        ));
    }


?>