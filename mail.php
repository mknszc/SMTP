<?php
include_once ('class/sendMail.php');
    if (strtolower(filter_input(INPUT_SERVER, 'HTTP_X_REQUESTED_WITH')) === 'xmlhttprequest') {
        $name = trim($_GET['first_name']);
        $lastName = trim($_GET['last_name']);
        $lastName = trim($_GET['last_name']);
        $email = trim($_GET['email']);
        $phone = trim($_GET['phone']);
        $message = $_GET['message'];
        $message = <<<TAG

                <html>
                    <body>
                        Adı:    $name <br/>
                        Soyad:  $lastName </br>
                        Numara: $phone <br/>
                        Email:  $email <br/>
                        Messaj: <p>$message</p>
                    </body>
                </html>
TAG;
		$to = "example@gmail.com";
		/*	
		* Recipient identification	
		*/
        if (!empty($to)) {
            sendMAil($to, $message);
			
			/*
			* Messages sent by defined information
			*/
        }
        else {
            echo 'Error';
        }
    }
    else {
        die();
    }
?>