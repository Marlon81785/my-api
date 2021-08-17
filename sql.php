<?php
    /**
     * sql -> incrivel que ` faz diferenca, quando coloco ` funciona quando coloco ' não (nos cmapos do banco)
     */

    //inserir mensagem no banco de dados
    $sql = "INSERT INTO `reactChat`
        (   
            `phone`,
            `phoneSend`,
            `status`,
            `mensagem`,
            `phoneConfirmed`,
            `pictureUser`,
            `extra`
        ) VALUES 
        (
            '$phoneNumber',
            '$phoneSend',
            '$status',
            '$message',
            'true',
            'data: xxx base64 file',
            'extra'
        );";

    // pesquisar se chegou mensagem

    $findMessageQuery = "SELECT * FROM `reactChat` WHERE phone = '$myPhoneNumber';";

    $deleteMessageQuery = "DELETE FROM `reactChat` WHERE phone = '$myPhoneNumber';";


?>