<!DOCTYPE html>
<html lang="it" ng-app="prog-int">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Progettazione Interni</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" >
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a href="./#/home">Home</a></li>
              <li><a href="./#/chi-siamo">Chi siamo</a></li>
              <li><a href="./#/realizzazione-villette">Realizzazione villette</a></li>
              <li><a href="./#/progetti">Progetti</a></li>
              <li><a href="./#/contatti">Contatti</a></li>
              <li><a href="./blog/" target="_blank">Blog</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="text-center">

<?php

require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$dest = 'info@progettazione-interni.com';

$email      = $_POST['email'];
$nominativo = $_POST['nominativo'];
$oggetto    = $_POST['oggetto'];
$messaggio  = $_POST['messaggio'];

$mail->addAddress($dest);
$mail->isHTML(true);

$mail->From     = $email;
$mail->FromName = utf8_decode($nominativo);
$mail->Subject  = utf8_decode($oggetto) . " - tramite progettazione-interni.com";
$mail->Body     = $messaggio;

if (isset($_FILES['attachment']) && $_FILES['attachment']['error'] == UPLOAD_ERR_OK) {
  $mail->AddAttachment($_FILES['attachment']['tmp_name'],
                       $_FILES['attachment']['name']);
  $allegato = $_FILES['attachment']['name'];
}
else
  $allegato = "nessun allegato";

if (!$mail->send()) {
?>

        <div class="alert alert-danger avviso">
          <p>Purtroppo non siamo riusciti a recapitare l'email richiesta, il nostro server riporta il seguente errore:</p>
          <br>
          <p><strong><?= $mail->ErrorInfo ?></strong></p>
          <br>
          <p>È possibile <a href="javascript:history.back()">tornare indietro</a> e provare a correggere l'errore.</p>
          <p>Se l'errore persiste, consigliamo di <a href="mailto:<?= $dest ?>">inviare manualmente un email all'indirizzo <strong><?= $dest ?></a></strong> contenente la vostra richiesta.</p>
          <br>
          <p>Ci scusiamo per il disagio.</p>
        </div>

<?php } else { ?>

        <div class="alert alert-success avviso text-center">
          <p class="lead">Email inviata con successo</p>
          <br>
          <table class="table table-bordered">
            <tr>
              <td><p><strong>Nominativo: &nbsp;</strong></p></td>
              <td><p><?= $nominativo ?></p></td>
            </tr>
            <tr>
              <td><p><strong>Mittente: &nbsp;</strong></p></td>
              <td><p><?= $email ?></p></td>
            </tr>
            <tr>
              <td><p><strong>Oggetto: &nbsp;</strong></p></td>
              <td><p><?= $oggetto ?></p></td>
            </tr>
            <tr>
              <td><p><strong>Messaggio: &nbsp;</strong></p></td>
              <td><p><?= $messaggio ?></p></td>
            </tr>
            <tr>
              <td><p><strong>Allegato: &nbsp;</strong></p></td>
              <td><p><?= $allegato ?></p></td>
            </tr>
          </table>
        </div>

<?php } ?>

      </div>
<?php

include "partials/footer.html";

?>
    </div>
  </body>
</html>
