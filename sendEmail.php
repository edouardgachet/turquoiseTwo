<?php
    use PHPMailer\PHPMailer\PHPMailer;

    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['room'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $room = $_POST['room'];
        $body = $_POST['body'];


        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $mail = new PHPMailer();

        //SMTP Settings
        //$mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->CharSet = "UTF-8";
        $mail->Username = "lunchboxclubturquoise@gmail.com"; //enter you email address
        $mail->Password = 'LunchBoxCt26'; //enter you email password
        $mail->Port = 587;
        $mail->SMTPSecure = "tls";

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($email, $name);
        $mail->addAddress("lunchboxclubturquoise@gmail.com"); //enter you email address
        $mail->Subject = ("$email ($name)");
        $mail->Body = $body;

        if ($mail->send()) {
            $status = "success";
            $response = "Email is sent!";

            $mail2 = new PHPMailer();

            $mail2->Host = "smtp.gmail.com";
            $mail2->SMTPAuth = true;
            $mail2->CharSet = "UTF-8";
            $mail2->Username = "lunchboxclubturquoise@gmail.com"; //enter you email address
            $mail2->Password = '123456test'; //enter you email password
            $mail2->Port = 587;
            $mail2->SMTPSecure = "tls";
    
            //Email Settings
            $mail2->isHTML(true);
            $mail2->setFrom("lunchboxclubturquoise@gmail.com");
            $mail2->addAddress($email); //enter you email address
            $mail2->Subject = ("Commande validé");
            $mail2->Body = 'Bonjour, </br></br> Votre commande lunchbox a bien été prise en compte.  </br></br> Merci, et à bientôt !';
            if ($mail2->send()) {
                $status = "success";
                $response = "Email is sent!";
            } else {
                $status = "failed";
                $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
            }

            $mail3 = new PHPMailer();

            $mail3->Host = "smtp.gmail.com";
            $mail3->SMTPAuth = true;
            $mail3->CharSet = "UTF-8";
            $mail3->Username = "lunchboxclubturquoise@gmail.com"; //enter you email address
            $mail3->Password = '123456test'; //enter you email password
            $mail3->Port = 587;
            $mail3->SMTPSecure = "tls";
    
            //Email Settings
            $mail3->isHTML(true);
            $mail3->setFrom("lunchboxclubturquoise@gmail.com");
            $mail3->addAddress("dsaefati@seare.fr"); //enter you email address
            $mail3->Subject = ("$email ($name)");
            $mail3->Body = $body;
            if ($mail3->send()) {
                $status = "success";
                $response = "Email is sent!";
            } else {
                $status = "failed";
                $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
            }
        } else {
            $status = "failed";
            $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }

        exit(json_encode(array("status" => $status, "response" => $response)));
    }
?>