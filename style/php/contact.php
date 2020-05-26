<?php 

//1 – Definimos Para quem vai ser enviado o email 
$para = "david.ramoon00@gmail.com"; 
//2 - resgatar o nome digitado no formulário e grava na variavel $nome 
$nome = $_POST['inputnome']; 
$telefone = $_POST['inputtel']; 
$sobrenome = $_POST['inputsobrenome']; 
$endereco = $_POST['inputend']; 
$bairro = $_POST['inputbairro'];
$cep = $_POST['inputcep'];
$desjereceb =$_POST['chechbox'];
// 3 - resgatar o assunto digitado no formulário e grava na variavel //$assunto 
$assunto = "Contato Através do Site Dr. Informatica"; 
//4 – Agora definimos a mensagem que vai ser enviado no e-mail 
$mensagem = "<strong>Nome: </strong>".$nome; 
$mensagem .= "<br> <strong>Sobrenome: </strong>".$sobrenome;  
$mensagem .= "<br> <strong>Telefone: </strong>".$telefone; 
$mensagem .= "<br> <strong>Endereco: </strong>".$endereco; 
$mensagem .= "<br> <strong>Bairro: </strong>".$bairro; 
$mensagem .= "<br> <strong>Cep: </strong>".$cep; 
$mensagem .= "<br> <strong>Desejo Receber: </strong>".$desjereceb; 
//5 – agora inserimos as codificações corretas e tudo mais. 
$headers = "Content-Type:text/html; charset=UTF-8\n"; 
$headers .= "From: ".$para."\n"; 
//Vai ser //mostrado que o email partiu deste email e seguido do nome 
$headers .= "X-Sender: ".$para."\n"; 
//email do servidor //que enviou 
$headers .= "X-Mailer: PHP v".phpversion()."\n"; 
$headers .= "X-IP: ".$_SERVER['REMOTE_ADDR']."\n"; 
$headers .= "Return-Path: ".$para."\n"; 
//caso a msg //seja respondida vai para este email. 
$headers .= "MIME-Version: 1.0\n"; 
mail($para, $assunto, $mensagem, $headers); //função que faz o envio do email. 
 echo ("<script>
        window.alert('Agradecemos a preferência, agora voçê sera redirecionado para a nossa pagina principal ')
		window.location.href='../index.html';
    </script>");

?>

