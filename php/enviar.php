<?php

    $nome = addcslashes($_POST['nome'])
    $email = addcslashes($_POST['email'])
    $celular = addcslashes($_POST['celular'])
    $mensagem = addcslashes($_POST['mensagem'])

    $para ="";
    $assunto = "Captura de Dados - porfolio"

    $corpo = "Nome: ".$nome."\n"."Email: ".$email."\n"."Celular: ".$celular."\n"."Mensagem: ".$mensagem;

    $cabeca = "From "."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para, $assunto, $corpo, $cabeca)){
        echo("Mensagem enviada com sucesso");
    }else {
        echo("ouve um erro ao enviar");
    }

?>