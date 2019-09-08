<?php
session_start();
require_once('services/Email.php');
if(!isset($_GET['action'])) {
    header('location: ./');
}

switch($_GET['action']) {
    case 'send':
        $new_email = new Email($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['message']);
        if($new_email->send_admin() && $new_email->send_customer()) {
            $_SESSION['status'] = "Tu correo se ha enviado con éxito";
            header('location: ./?status=success#contacto');
        } else {
            $_SESSION['status'] = "No se puede enviar el email, intenta más tarde";
            header('location: ./?status=danger#contacto');
        }
        break;
    default:
        header('location: ./');
        break;
}