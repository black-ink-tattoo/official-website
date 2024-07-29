<?php

if( empty($_POST['_nome']) || empty($_POST['_mail']) || empty($_POST['messaggio']) ){
    echo 'nome - mail - messaggio... errore, dati mancanti';
    exit();
}

$nome = $_POST['_nome'];
$email = $_POST['_mail'];

$testo='';
$testo.="<b>$nome</b> ti ha contattato.<br/>";
$testo.="E' possibile rispondere alla seguente email: <b>$email</b>";

$msg_array = explode("\n", $_POST['messaggio']);
$_POST['messaggio'] = implode('<br/>', $msg_array);
$testo.='Messaggio: <br/>';
$testo.=$_POST['messaggio'];

$testo.="<br/>Mail inviata il ". date('d/m/Y  H:i:s');

include 'common/mail/mail.php';

if (invia_mail($testo, 'Contatto da modulo mail Sito BlackInk') ){
    echo 'mail inviata';
    exit();
}else{
    echo 'non è stato possibile inviare la mail';
    exit();
}

?>
