<?php

if(isset(($_POST['email']) && !empty(($_POST(['email'])){
$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['message']);

$to = "gusta8914@gmail.com"
$subject = "Contato - Aulas para Habilitados"
$body = "Nome: ".$nome. "/r/n".
        "Nome: ".$email. "/r/n".
        "Nome: ".$mensagem;

$header = "From:canalgamesp900@gmail.com"."/r/n"."Reply-to:".$email."/e/n"."X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){

    echo("Email enviado com sucesso!")

}else{
    echo("O email não pode ser enviado!");

}


}

?>