<?php
if (isset($_POST{'email'})) {

  // Email information
  $admin_email = "mohammedchnani4@gmail.com";
  $name = $_post {'name'},
  $email = $_post {'email'},
  $phone = $_post {'phone'},
  
  // Send Email
  mail($admin_email, "New Form Submission",
   $message . '-' . $phone, "From:" . $email);

   header('Location: http://127.0.0.1:5500/index.html');
}