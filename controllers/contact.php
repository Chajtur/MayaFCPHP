<?php

switch ($action) {
    case 'contact':
        saveContact();
        break;
    case 'send':
        include 'views/send.php';
        break;
    default:
        include 'views/contact.php';
        break;
}

/**
 * Función que guarda los datos del formulario de contacto
 */
function saveContact() {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $phone = $_POST['phone'];
    $contact = new Contact($name, $email, $message, $phone);
    if ($contact->save()) {
        
    }
}

?>