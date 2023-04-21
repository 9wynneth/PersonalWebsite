<?php
include 'connection.php';
if (isset($_POST['name'])) {
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $sql = "INSERT INTO contact (`name`, `subject`, email, `message`) VALUES ('$name', '$subject','$email', '$message');";

  // if ($conn->query($sql) === TRUE) {
  //   echo "Data inserted";
  // } else {
  //   echo "Error: " . $sql . "<br>" . $conn->error;
  // }
 echo "<script>alert('Your message has been sent. Thank you!');";
  if ($conn->query($sql) === TRUE) {
    header('Refresh:1; url=http://localhost/phpmyadmin', true, 303);
    echo "<script>alert('Your message has been sent. Thank you!');";
   echo "window.location.replace('http://localhost/afl%202/MyResume/MyResume/index.html');</script>";
  } else {
    echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "');</script>";
}

  mysqli_close($conn);
}

?> 

 
 <!-- 


// $name = $_POST['name'];
// $email = $_POST['email'];
// $subject = $_POST['subject'];
// $message = $_POST['message'];

// $to = 'gisviandhy@student.ciputra.ac.id';
// $body = "Name: $name\nEmail: $email\nMessage: $message";

// $headers = "From: $email\n";
// $headers .= "Reply-To: $email\n";

// mail($to, $subject, $body, $headers);
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  // $receiving_email_address = 'contact@example.com';

  // if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
  //   include( $php_email_form );
  // } else {
  //   die( 'Unable to load the "PHP Email Form" Library!');
  // }

  // $contact = new PHP_Email_Form;
  // $contact->ajax = true;
  
  // $contact->to = $receiving_email_address;
  // $contact->from_name = $_POST['name'];
  // $contact->from_email = $_POST['email'];
  // $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  
//   $contact->smtp = array(
//     'host' => 'example.com',
//     'username' => 'example',
//     'password' => 'pass',
//     'port' => '587'
//   );
  

//   $contact->add_message( $_POST['name'], 'From');
//   $contact->add_message( $_POST['email'], 'Email');
//   $contact->add_message( $_POST['message'], 'Message', 10);

//   echo $contact->send();
//  -->