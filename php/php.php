<?php 
  
 if (isset($_POST['enviar'])) {
 	if (!empty($_POST['name']) && !empty($_POST['aunto']) && !empty($_POST['mensaje']) && !empty($_POST['email'])) {
 		 $name = $_post["name"];
         $email = $_post["email"];
         $asunto = $_post["asunto"];
         $mensaje = $_post["mensaje"];
         $header = "from: benjamiviolavaldez@gmail.com" . "\r\n";
         $header = "Reply-To: benjamiviolavaldez@gmail.com" . "\r\n";
         $header = "X-mailer: PHP/" . phpversion();
         $mail = mail($email, $asunto, $mensaje, $header);
         if ($mail) {
         	echo" <h4>¡Enviado exitosamente!</h4>";
         }

 	}
 	
 }

 ?>






