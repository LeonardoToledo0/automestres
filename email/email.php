<?php

// Importar classes do PHPMailer para o espaço de nomes global
// Estas devem estar no topo do seu script, não dentro de uma função
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$ok = 0;

if(isset($_POST['email'])){

    $nome   = $_POST['nome'];
    $email  = $_POST['email'];
    $fone   = $_POST['fone'];
    $mens   = $_POST['mens'];

    // Carregar o autoloader do Composer
    require 'mailer/Exception.php';
    require 'mailer/PHPMailer.php';
    require 'mailer/SMTP.php';
    
    // Criar uma instância; passar `true` habilita exceções
    $mail = new PHPMailer(true);

    try {
        // Configurações do servidor

        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Habilitar saída de depuração detalhada
        $mail->isSMTP();                                            // Enviar usando SMTP
        $mail->Host       = 'smtp.hostinger.com.br';                // Definir o servidor SMTP para enviar
        $mail->SMTPAuth   = true;                                   // Habilitar autenticação SMTP
        $mail->Username   = 'Seu email de disparo';                 // Nome de usuário SMTP
        $mail->Password   = 'SENHA';                                // Senha SMTP
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            // Habilitar criptografia TLS
        $mail->Port       = 465;                                    // Porta TCP para conectar-se

        // Destinatários
        $mail->setFrom('Seu email de disparo', 'Assunto do email');
        $mail->addAddress('Email que vai receber');                 // Adicionar um destinatário

        // Conteúdo
        $mail->isHTML(true);                                        // Definir formato de e-mail para HTML
        $mail->Subject = 'Site Assunto';
        
        $mail->Body    = "
            <strong> Mensagem do site ... ... </strong>
            <br><br>
            <strong> Nome: </strong> $nome <br>
            <strong> Email: </strong> $email <br>
            <strong> Telefone: </strong> $fone <br>
            <strong> Mensagem: </strong> $mens
        ";
        
        $mail->AltBody = "
        <strong> Mensagem do site ... ... </strong>
            <br><br>
            <strong> Nome: </strong> $nome <br>
            <strong> Email: </strong> $email <br>
            <strong> Telefone: </strong> $fone <br>
            <strong> Mensagem: </strong> $mens    
        ";

        $mail->send();
        $ok = 1;
    } catch (Exception $e) {
        $ok = 2;
        echo "Erro do Mailer: {$mail->ErrorInfo}";
    }
}
?>
