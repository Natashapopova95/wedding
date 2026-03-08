<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "nat4shail@yandex.ru"; // ЗАМЕНИТЕ НА ВАШУ ПОЧТУ
    $subject = "Ответ на приглашение";
    
    $name = strip_tags(trim($_POST["name"]));
    $attendance = strip_tags(trim($_POST["attendance"]));
    $alcohol = strip_tags(trim($_POST["alcohol"]));

    $message = "Имя: $name\n";
    $message .= "Придет: $attendance\n";
    $message .= "Алкоголь: $alcohol\n";

    $headers = "From: wedding-topaz-pi.vercel.app"; // Укажите реальный домен, если есть

    if (mail($to, $subject, $message, $headers)) {
        http_response_code(200);
    } else {
        http_response_code(500);
    }
} else {
    http_response_code(403);
}
?>
