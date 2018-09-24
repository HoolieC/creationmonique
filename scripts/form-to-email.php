<?php
if (isset($_POST['submit'])) {
  $nombre = $_POST['nombre'];
  $mailFrom = $_POST['e-mail'];
  $telefono = $_POST['telefono'];
  $mensaje = $_POST['mensaje'];

  $mailTo = "armando.calvillo@lorydigitalconsulting.com"
  $headers = "From :".$mailFrom ."." $telefono;
  $txt = "Has recivido un e-mail de ".$nombre. ". \n\n". $mensaje;

  mail($mailTo, $txt, $headers)
  header("location :index.php?mailsend")
}
 ?>
