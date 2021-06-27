<?php
$nome = isset($_POST['nome']) ? $_POST['nome'] : 'Não Informado';
$email = isset($_POST['email']) ? $_POST['email'] : 'Não Informado';
$numero = isset($_POST['numero']) ? $_POST['numero'] : 'Não Informado';
$mensagem = isset($_POST['mensagem']) ? $_POST['mensagem'] : 'Não Informado';

$to      = 'falecom@nettomarques.com.br';
$subject = 'Contato Site';
$message = '
<html>
<head>
  <title>Birthday Reminders for August</title>
</head>
<body>

  Nome: '.$nome.'<br>
  E-mail: '.$email.'<br>
  Telefone: '.$numero.'<br>
  Mensagem: '.$mensagem.'<br>

</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=utf-8';
$headers[] = 'From: falecom@nettomarques.com.br';
$headers[] = 'Reply-To: falecom@nettomarques.com.br';
$headers[] = 'X-Mailer: PHP/' .phpversion(); 

// echo var_dump($_POST);

// $headers = array(
//     'From' => 'falecom@nettomarques.com.br',
//     'Reply-To' => 'falecom@nettomarques.com.br',
//     'X-Mailer' => 'PHP/' . phpversion()
// );

$enviado = mail($to, $subject, $message, implode("\r\n", $headers));

if ($enviado){
    echo 'Enviado';
}
else{
    echo 'Não enviado';
}
?>