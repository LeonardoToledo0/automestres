<?php

// Importar classes do PHPMailer para o espaço de nomes global
// Estas devem estar no topo do seu script, não dentro de uma função
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$ok = 0;

if (isset($_POST['email'])) {

  $nome   = $_POST['nome'];
  $email  = $_POST['email'];
  $fone   = $_POST['fone'];
  $mens   = $_POST['mens'];

  $contato = new ClassContato();

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
    $mail->setFrom('Seu email de disparo', 'Site Oficina Auto Mestre');
    $mail->addAddress('Email que vai receber');                 // Adicionar um destinatário

    // Conteúdo
    $mail->isHTML(true);                                        // Definir formato de e-mail para HTML
    $mail->Subject = 'Site Oficina Auto Mestre';

    $mail->Body    = "
            <strong> Mesnagem  Site Oficina Auto Mestre </strong>
            <br><br>
            <strong> Nome: </strong> $nome <br>
            <strong> Email: </strong> $email <br>
            <strong> Telefone: </strong> $fone <br>
            <strong> Mensagem: </strong> $mens
        ";

    $mail->AltBody = "
        <strong> Mensagem Site Oficina Auto Mestre </strong>
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


<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contato - Oficina Auto Mestre</title>
  <!--Comentarios -->
  <link rel="stylesheet" href="css/reset.css" />

  <!--Icons Google-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" type="text/css" href="css/slick.css" />
  <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />
  <link rel="stylesheet" href="css/anima.css" />
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="stylesheet" href="css/mobile.css" />
</head>

<body>
  <!-- cabecalho -->
  <?php require_once('conteudo/topo.php'); ?>
  <!--Corpo do Site -->
  <section class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.0254648900777!2d-46.434437023761696!3d-23.495592259181063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce63dda7be6fb9%3A0xa74e7d5a53104311!2sSenac%20S%C3%A3o%20Miguel%20Paulista!5e0!3m2!1spt-BR!2sbr!4v1710505039565!5m2!1spt-BR!2sbr" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </section>
  <main>

    <!-- Formulario -->
    <section class="form">
      <div class="site">
        <h2> Contato Oficina Auto Mestres</h2>
        <?php
        if ($ok == 1) {
          echo $nome . ", Sua mensagen foi enviada com sucesso";
        } else if ($ok == 2) {
          echo $nome . ", Não foi possivel enviar a mensagem ";
        } ?>
        <form action="#" method="POST">
          <div>
            <div>
              <input type="text" name="nome" id="nome" placeholder="Informe seu nome:" required>
            </div>
            <div>
              <input type="email" name="email" id="email" placeholder="Informe seu email:" required>
            </div>
            <div>
              <input type="tel" name="fone" id="fone" placeholder="Informe seu telefone:" required>
            </div>
          </div>
          <div>
            <div>
              <textarea name="mens" id="mens" cols="30" rows="10" placeholder="Informe sua mensagem:"></textarea>
            </div>
            <div>
              <input type="submit" value="Enviar por email">
              <button onclick="EnviaWhats()">Enviar por WhatsApp</button>
            </div>
          </div>
        </form>
      </div>


    </section>

    <!-- Inicio Galeria  -->
    <?php require_once('conteudo/galeria.php'); ?>



  </main>
  <?php require_once('conteudo/footer.php'); ?>
  <script src=" https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="Js/slick.min.js"></script>
  <script src="Js/wow.min.js"></script>
  <script src="Js/animacao.js"></script>
</body>

</html>