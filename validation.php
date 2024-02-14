<?php
$nome = filter_input(INPUT_POST , "nome", FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, "telefone", FILTER_VALIDATE_INT);
$msg = filter_input(INPUT_POST, "msg", FILTER_SANITIZE_STRING);

#variaveis para enviar um email
$to = "viniciusfurtado230@gmail.com";
$subject = "Novo contato pelo site";
$message = "Nome: $nome
            Telefone: $telefone
            Mensagem: $msg";
$headers = "from: viniciusfurtado238@gmail.com";
#enviando para o email

try{
    mail($to ,$subject, $message, $headers);
    echo "obrigado logo entrarei em contato";
}catch(Exception $error){
    echo "erro ao enviar o seu email, tente novamente mais tarde.";
}



