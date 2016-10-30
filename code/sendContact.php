<?php

if(!isset($_POST["email"])){
	header("Location: ../index.php");
}
// the message
$msg = "From:" .$_POST["name"] ." - " .$_POST["email"] ."<br /> Message: "  .$_POST["msg"];
$msg = wordwrap($msg,70);
// send email
mail("prototypesart@gmail.com","PrototypesArt",$msg);
header("Location: ../index.php");
exit();
