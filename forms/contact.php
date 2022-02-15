<?php
  /* Requiere la librería "PHP Email Form".
  * La librería "PHP Email Form" sólo está disponible en la versión pro de la plantilla
  * La biblioteca debe cargarse en: vendor/php-email-form/php-email-form.php  
  */

  // Sustituya contact@example.com por su dirección de correo electrónico de recepción real
  $receiving_email_address = 'alejandro_xp90@hotmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'No se puede cargar la biblioteca "PHP Email Form!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];

  /* Descomente el código de abajo si quiere usar SMTP para enviar correos electrónicos. Debe introducir sus credenciales SMTP correctas
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();
?>
