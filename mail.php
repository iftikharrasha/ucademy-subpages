<?php 
if (!empty($_POST)) 
{
    $name = trim(strip_tags($_POST['name']));
    $email = trim(strip_tags($_POST['email']));
    $message = trim(strip_tags($_POST['message']));

    $question1 = '1. Name: '.$name;
    $question2 = '2. Email: ' .$email;
    $question3 = '3. Nachricht: ' .$message;
    


    $subject = "der modernste Nothelferkurs";
    $to = "daveucademy@gmail.com";

    $body = "<strong> $question1</strong> <br> <strong>$question2</strong>  <br> <strong>$question3</strong>";

    $headers = "From: noreply@der-modernste-nothelferkurs.ch\r\n";
//    $headers .="Reply-To: " . $email . "\r\n";
    $headers .= "Content-type: text/html\r\n";


    if(mail($to, $subject, $body, $headers)){
        header("Location:index.php?mail=true");
        exit();
    } else {
?>
<h1 class="text-danger pt-4 text-center">Es ist ein Fehler aufgetreten. Die Email wurde nicht versendet. Bitte versuche es erneut.</h1>
<?php }
}