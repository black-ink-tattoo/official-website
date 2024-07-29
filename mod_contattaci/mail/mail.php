<?php
require_once('class.phpmailer.php');
include_once("class.smtp.php");


function invia_mail( $testo, $oggetto ){
	//ob_end_flush();
    $mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch
    $mail->IsSMTP(); // telling the class to use SMTP

    try {
      //$mail->Host       = "smtp.tiscali.it"; // SMTP server
	  
	  $mail->SMTPAuth  = true;
	  $mail->Host       = "smtp.blackink.it";
	  $mail->Port = 25;
	  $mail->Username ="info@blackink.it";
	  $mail->Password = "passwordBlackink";
	  

     // $mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)

          $mail->AddAddress('info@blackink.it');
          $mail->SetFrom('info@blackink.it', 'Amministrazione | BLACK INK');
          $mail->Subject = $oggetto;
          $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
    
          $mail->MsgHTML( $testo );
          $mail->Send();
      
          return true;
      
    } catch (phpmailerException $e) {
            echo $e->errorMessage(); //Pretty error messages from PHPMailer
            //return false;
    } catch (Exception $e) {
          echo $e->getMessage(); //Boring error messages from anything else!
          //return false;
    }

}

?>
