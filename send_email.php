

 <?php

    
    session_start();

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    /* Exception class. */


    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $address = $_REQUEST['address'];
    $state = $_REQUEST['state'];
    $country = $_REQUEST['country'];
    $final_price = $_REQUEST['total'];

    echo $final_price;


    $form_data = array("name" => $name, "email" => $email, "address" => $address, "state" => $state, "country" => $country, "final_price" => $final_price);

    $message = "";



    //PHPMailer Object
    $mail = new PHPMailer(); // create a new object
    $mail->IsSMTP(); // enable SMTP
    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = " "; // Enter your Email
    $mail->Password = " "; // Enter your Email Password
    $mail->SetFrom("example@gmail.com");
    $mail->Subject = "Thank you for Shopping";
    $mail->Body = $message;
    $mail->AddAddress($email);

    if (!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "<script>
            alert('Mail Sent Successfully');
            window.location.href='index.php';
            </script>";
    }


    ?>
