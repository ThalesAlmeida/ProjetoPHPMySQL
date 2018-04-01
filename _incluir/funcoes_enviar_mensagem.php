<?php
    function enviarMensagem($dados){
        //Dados do formulário
        $nome_usuario     = $dados['nome'];
        $email_usuario    = $dados['email'];
        $mensagem_usuario = $dados['mensagem'];
        
        //Criar variaveis de envio
        $destino          = "thalesalves44@gmail.com";
        $remetente        = "thalesalves44@gmail.com";
        $assunto          = "Mensagem do site";
        
        
        //Mostrar o corpo da mensagem
        $mensagem         = "O usuário" . $nome_usuario . "enviou uma mensagem." . "</br>";
        $mensagem        .= "email do usuario: " . $email_usuario . "</br>";
        $mensagem        .= $mensagem_usuario;
        
        return mail($destino, $assunto, $mensagem, $remetente);
    }

?>