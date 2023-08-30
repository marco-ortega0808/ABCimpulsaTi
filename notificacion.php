<?php 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    if (isset($_POST['info'])) {
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $tel = $_POST['tel'];
        $contpa = $_POST['contpaqi'];

        require ('PHPMailer/src/Exception.php');
        require ('PHPMailer/src/PHPMailer.php');
        require ('PHPMailer/src/SMTP.php');
                
        $mail = new PHPMailer(true);

        try {
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();                  
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'atensionabcimpulsa@gmail.com';
            $mail->Password   = 'qgum pkih bydq rbtp ';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            $mail->setFrom('atensionabcimpulsa@gmail.com', 'ABC Impulsa Ti');
            $mail->addAddress("marcoantoniot089@gmail.com");
            $mail->addReplyTo('marcoantoniot089@gmail.com');

            $mail->isHTML(true);
            $mail->Subject = 'Solitud de informacion';
            $mail->Body = "<p style='text-align: center;'> <h1>Alguien solicita información</h1>
            <h2>Datos sobre prospecto al cliente</h2>
            <p>Son los datos que registro</p>
            <ul>
            <li><strong>Nombre</strong> ".$nombre."</li>
            <li><strong>Correo</strong>".$correo."</li>
            <li><strong>Tel</strong>".$tel."</li>
            <li><strong>Solicitud de informe</strong>".$contpa."</li>
            </ul> ";
            $mail->send();
            
        }
        catch(Exception $e){
        }
    }
?>