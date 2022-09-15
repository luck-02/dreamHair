<?php

$name = $_POST['name'];
$email = $_POST['email'];
$sujet = $_POST['sujet'];
$message = $_POST['message'];

$mailheader = "De: ".$name."<".$email.">\r\n";
$recipient = "luck.ndzamba@gmail.com";

mail($recipient, $sujet, $message, $mailheader) or die("Error!");

echo"

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dream Hair</title>
  <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>

  <div class="contact">
    <h1> Merci ! Je vous répondrais dès que possible</h1>
    <p class="back">Retour à <a href="index.html">Accueil</a>.</p>
  </div>

  <div class="cursor-outer"></div>
  <div class="cursor-inner"></div>

  <script>
    let cursor = document.querySelector(".cursor-inner");
    let cursor2 = document.querySelector(".cursor-outer");

    document.addEventListener("mousemove", e=>{
      // console.log(e);
      cursor.style.top = e.clientY + "px";
      cursor.style.left = e.clientX + "px";

      cursor2.style.top = e.clientY + "px";
      cursor2.style.left = e.clientX + "px";
    })
  </script>

</body>
</html>


";



 ?>
