<?php
include_once ('class/sendMail.php');
    if (strtolower(filter_input(INPUT_SERVER, 'HTTP_X_REQUESTED_WITH')) === 'xmlhttprequest') {

        $name = trim($_GET['first_name']);
        $lastName = trim($_GET['last_name']);
        $lastName = trim($_GET['last_name']);
        $email = trim($_GET['email']);
        $phone = trim($_GET['phone']);
        $message = $_GET['message'];

        $message ="
                <html>
                    <body>
                        Adı: $name <br/>
                        Soyad: $lastName </br>
                        Numara: $phone <br/>
                        Messaj: <p>$message</p>
                    </body>
                </html>";

        if (!empty($email)) {
            sendMAil($email, $message);
        }
        else {
            echo 'Error';
        }
    }
    else{
        die();
    }
?>