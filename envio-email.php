<?php
// Inserir Arquivos do PHPMailer
require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

// Usar as classes sem o namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function clean_input($input)
{
   $input = trim($input);
   $input = stripslashes($input);
   $input = htmlspecialchars($input);

   return $input;
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
   $nome          = $_POST['nome'];
   $email         = $_POST['email'];
   $mensagem      = $_POST['mensagem'];
   $telefone      = $_POST['telefone'];
   $data          = $_POST['data'];
   $num_pessoas   = $_POST['num_pessoas'];

   $nome          = clean_input($nome);
   $email         = clean_input($email);
   $mensagem      = clean_input($mensagem);
   $telefone      = clean_input($telefone);
   $data          = clean_input($data);
   $num_pessoas   = clean_input($num_pessoas);

   $texto_mensagem = 'E-mail enviado do sistema de reserva do Resto Bar' . '<br /><br />' .
   'Nome: ' . $nome . '<br />' .
   'E-mail: ' . $email . '<br />' .
   'Telefone: ' . $telefone . '<br />' .
   'Data: ' . $data . '<br />' .
   'Número de Pessoas: ' . $num_pessoas . '<br />' .
   'Mensagem: ' . $mensagem . '<br />';

   // Criação do Objeto da Classe PHPMailer
   $mail = new PHPMailer(true);
   // $mail->CharSet = "UTF-8"

   try {
      //Retire o comentário abaixo para soltar detalhes do envio
      // $mail->SMTPDebug = 2;

      // Usar SMTP para o envio
      $mail->isSMTP();

      // Detalhes do servidor (No nosso exemplo é o Google)
      $mail->Host = 'smtp.gmail.com';

      // Permitir autenticação SMTP
      $mail->SMTPAuth = true;

      // Nome do usuário
      $mail->Username = 'cwebjoao@gmail.com';
      // Senha do E-mail
      $mail->Password = 'CursosWeb@1234';
      // Tipo de protocolo de segurança
      $mail->SMTPSecure = 'tls';

      // Porta de conexão com o servidor
      $mail->Port = 587;

      // Garantir a autenticação com o Google
      $mail->SMTPOptions = array(
         'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
         )
      );

      // Remetente
      $mail->setFrom($email, $nome);

      // Destinatários
      $mail->addAddress('cwebjoao@gmail.com', 'Resto Bar');

      // Conteúdo

      // Define conteúdo como HTML
      $mail->isHTML(true);

      // Assunto
      $mail->Subject = 'Novo Pedido de Reserva';
      $mail->Body    = $texto_mensagem;
      $mail->AltBody = $texto_mensagem;

      // Enviar E-mail
      $mail->send();
      $confirmacao = 'Mensagem enviada com sucesso';
   } catch (Exception $e) {
      $confirmacao = 'A mensagem não foi enviada';
   }
}
?>
