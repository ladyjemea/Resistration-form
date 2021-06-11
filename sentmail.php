<?php

if (isset($_POST['submit'])){
if(!empty($_POST['email'])){ 
$mail = $_POST['email'];
/*$option = $_POST['option'];
$optionlist = implode(', ', (array)$option);*/
$xrays = $_POST['xrays'];
$xrayslist = implode(', ', (array)$xrays);
$protons = $_POST['protons'];
$protonslist = implode(', ', (array)$protons);
$NyÅlesund = $_POST['NyÅlesund'];
$NyÅlesundlist = implode(', ', (array)$NyÅlesund);
$Tromsø = $_POST['Tromsø'];
$Tromsølist = implode(', ', (array)$Tromsø);
$Dombås = $_POST['Dombås'];
$Dombåslist = implode(', ', (array)$Dombås);
$NyÅlesund_dh = $_POST['NyÅlesund_dh'];
$NyÅlesund_dhlist = implode(', ', (array)$NyÅlesund_dh);
$Tromsø_dh = $_POST['Tromsø_dh'];
$Tromsø_dhlist = implode(', ', (array)$Tromsø_dh);
$Dombås_dh = $_POST['Dombås_dh'];
$Dombås_dhlist = implode(', ', (array)$Dombås_dh);
$to = "";
$subject = "New Registration";
$headers = "Content-Type: text/html; charset=ISO-8859-1\r\n";
$body = "<h3>Here are the details</h3> <b>"."xrays: ".$xrayslist."<br>"."protons: ".$protonslist."<br>"."Ny-Ålesund: ".$NyÅlesundlist."<br>"."Tromsø: ".$Tromsølist."<br>"."Dombås: ".$Dombåslist."<br>"."<br>"."Ny-Ålesund DH: ".$NyÅlesund_dhlist."<br>"."Tromsø DH: ".$Tromsø_dhlist."<br>". "Dombås DH: ".$Dombås_dhlist."<br>"."<br>"."Email: ".$mail."</b>";
if(mail ($to,$subject,$body, $headers)){
header("Location: index.html#success");
}
}
}
if (isset($_POST['unsubscribe'])){
if(!empty($_POST['email'])){ 
$mail = $_POST['email'];
$to = "";
$subject = "Unsubscribe from Website";
$headers = "Content-Type: text/html; charset=ISO-8859-1\r\n";
$body = "<h3>Here are the details</h3> <b>Email: ".$mail."</b>";
if(mail ($to,$subject,$body, $headers)){
header("Location: unsubscribe.html#success");
}
}
}