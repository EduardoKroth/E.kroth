<?php


if(isset($_POST['name']) && !empty($_POST['name'])){


$nome = addcslashes($_POST['name']);
$email = addcslashes($_POST['email']);
$mensagem = addcslashes($_POST['message']);

/* eu acho que o email no lugar do @gmail.com tem que ser criando com o '@dominio do site'. "esse e o mail que vai receber todos os emails do contato."*/
$to = "eduardokroth096@gmail.com";
$subject = "Contato - MeuSite";
$body = "Nome: ".$nome. "/r/n".
        "Email: ".$email. "/r/n".
        "Mensagem: ".$mensagem;
        /* o email from, e o email que vai aparecer pra mim quem enviou... tambem tem quer ser @dominio do site  'esse e obrigatorio o dominio.' */
$header = "from:E.kroth@gmail.com"."/r/n".
            "reply-to:".$email."/r/n".
            "X=Mailer:PHP/".phpversion();
if (mail($to,$subject,$body,$header)){

    echo("Email enviado com sucesso!");
}else{
    echo("O email nao pode ser enviado.")";"
}



}




?>