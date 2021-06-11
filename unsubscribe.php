<?php

if (!empty($_POST['email'])) {

    $email = $_POST['email'];
    $to = "";
    $subject = "Unsubscribe from Website";
    $headers = "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $body = "<h3>Here are the details</h3> <b>Email: " . $email . "</b>";

    if (mail($to, $subject, $body, $headers)) {
        header("Location: index.html#unsubscribesuccess");
    }
}
