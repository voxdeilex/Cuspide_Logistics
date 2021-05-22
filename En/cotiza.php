<?php

    $to = 'ivan.huerta@cuspidegroup.com.mx';
    $from = $_REQUEST['mail'];
    $name = $_REQUEST['nombre'];
    $number = $_REQUEST['tel'];
    $select = $_REQUEST['select1'];
    $city = $_REQUEST['ciudad'];
    $terminos = $_REQUEST['terminos'];
    $peso = $_REQUEST['peso'];
    $altura = $_REQUEST['high'];
    $largo = $_REQUEST['large'];
    $radio1 = $_REQUEST['radio-1'];
    $radio2 = $_REQUEST['radio-2'];
    $radio4 = $_REQUEST['radio-4'];
    $radio5 = $_REQUEST['radio-5'];
  

    $headers = "From: $from";
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $subject = "Tienes un mensaje de Cúspide Group";

    $logo = 'img/logo.png';
    $link = '#';

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
	$body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
	$body .= "</td></tr></thead><tbody><tr>";
	$body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";
	$body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
	$body .= "</tr>";
    $body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$number}</td></tr>";
    $body .= "<tr><td colspan='2' style='border:none;'>{$select}</td></tr>";
    $body .= "<tr><td colspan='2' style='border:none;'>{$city}</td></tr>";
    $body .= "<tr><td colspan='2' style='border:none;'>{$terminos}</td></tr>";
    $body .= "<tr><td colspan='2' style='border:none;'>{$peso}</td></tr>";
    $body .= "<tr><td colspan='2' style='border:none;'>{$altura}</td></tr>";
    $body .= "<tr><td colspan='2' style='border:none;'>{$largo}</td></tr>";
    $body .= "<tr><td colspan='2' style='border:none;'>{$radio1}</td>Terrestre</tr>";
    $body .= "<tr><td colspan='2' style='border:none;'>{$radio2}</td>Entrega Express</tr>";
    $body .= "<tr><td colspan='2' style='border:none;'>{$radio4}</td>Seguro</tr>";
    $body .= "<tr><td colspan='2' style='border:none;'>{$radio5}</td>Paquetería</tr>";
	$body .= "<tr><td></td></tr>";
	$body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
	$body .= "</tbody></table>";
	$body .= "</body></html>";

    $send = mail($to, $subject, $body, $headers);

?>