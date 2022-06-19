<?php

if(isset($_POST['submit'])) {
    $mailto = "huongle2512@gmail.com"; 
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    //Email body I will receive
 $message = "Nom: " . $nom . "\n"
 . "Prenom: " . $prenom . "\n\n"
 . "Email: " . "\n" . $email;
 
 //Message for client confirmation
 $message2 = "Thank you for contacting us. We will get back to you!";
 
 //Email headers
 $headers = "From: " . $email; // Client email, I will receive
//  $headers2 = "From: " . $mailto; // This will receive client
 
 //PHP mailer function
 
  $result1 = mail($mailto, $message, $headers); // This email sent to My address
  // $result2 = mail($email, $message2, $headers2); //This confirmation email to client
 
  //Checking if Mails sent successfully
 
  if ($result1 = true) {
    $success = "Your Message was sent Successfully!";
  } else {
    $failed = "Sorry! Message was not sent, Try again Later.";
  }
 
}

?>