<?php


$klientoPastas = $_POST['elpastas'];
$antraste = $_POST['antraste'];
$klausimas = $_POST['zinute'];


// echo $klientoPastas . " " . $antraste . " " . $klausimas . "<br>";
echo "$klientoPastas $antraste $klausimas ";


//Load composer's autoloader
require './PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 3;                                 // Enable verbose debug output // debug parametras, kuo didesnis, tuo placiau apraso klaidas,    testavimo tikslais didesnis skaicius, bet kai paleidi vartotojui, rasai 0
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'qbasss@gmail.com';                 // SMTP username //mano emailas
    $mail->Password = 'xxxx';                            // SMTP password  //mano pass
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to //paziuret gmail koks

    //Recipients
    $mail->setFrom($klientoPastas, 'Puslapiu kurimas');
    $mail->addAddress('qbasss@gmail.com', 'Interneto sistemos');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo($klientoPastas, 'Pirkejas');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $antraste;
    $mail->Body    = $klausimas;
    $mail->AltBody = $klausimas;

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}




// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++



// define( "DB_NAME", 'demuro');
// define( "HOST", 'localhost');
// define( "DB_USERNAME", 'root');  // root
// define( "DB_PASS", 'root');            // root
//
//
// $connection = mysqli_connect( HOST, DB_USERNAME, DB_PASS, DB_NAME);
//
// if ($connection) {
//     //    echo "Prisijungti prie DB pavyko <br>";
// } else {
//     die ("ERROR: prisijungti napavyko, nes: " . mysqli_connect_error());
// }
// // Change character set to utf8
// // ijungima lietuvyves
// mysqli_set_charset($connection,"utf8");
//
//
// function getConnection() {
//     global $connection;
//     return $connection;
// }
//
//
//
//
//
//
//   //
//   if (isset($_POST['send'])) {
//       $vardas = $_POST['antraste'];
//       $emailas = $_POST['elpastas'];
//       $zinute = $_POST['zinute'];
//
//       $uzklausa = "INSERT INTO uzklausos ('', 'vardas', 'epastas', 'text', 'data', 'ats') ";
//       $uzklausa = "VALUES '{vardas}', '{epastas}', '{text}', NOW(), '{ats}'";
//       $idejimas = mysqli_query($connection, $uzklausa);
//   }
//
//   function createQuery($vardas, $elpastas, $klausimas) {
//    //    $sql_string = "INSERT INTO users
//    //                   VALUES ('', '$uname', '$password', '$elpastas')";
//       // ARBA SAUGIAU
//       $duomenys = sprintf("INSERT INTO uzklausos
//                          VALUES ('', '%s', '%s', '%s', NOW(), 'ats')",
//                            mysqli_real_escape_string (getConnection(), $vardas),
//                            mysqli_real_escape_string (getConnection(), $elpastas)
//                            mysqli_real_escape_string (getConnection(),  $klausimas),
//                     );
     // https://www.w3schools.com/php/func_mysqli_real_escape_string.asp
    // mysqli_real_escape_string - Required. The string to be escaped. Characters encoded are NUL (ASCII 0), \n, \r, \, ', ", and Control-Z.

    // $first_name = htmlspecialchars( $first_name );
    // $first_name = strip_tags( $first_name );
  //      $arVeikia = mysqli_query(getConnection(), $sql_string);
  //      if (!$arVeikia) {  //  ($arVeikia == false)
  //          echo "ERROR: " . mysqli_error(getConnection());
  //      }
  // }




 ?>
