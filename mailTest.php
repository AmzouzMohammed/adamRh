<?php
$to = "robenn44@live.fr";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com";

var_dump(mail($to,$subject,$txt,$headers));
?>