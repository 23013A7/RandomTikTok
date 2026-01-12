<?php 
    // Заголовоки
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");//Установка того что апи вернёт json
    //Определение какой http метод используется

    $filename = '../../statick/RandomTikTok/RandomTikTok.txt'; //запись имени файла в переменую
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES); //получения массива строк из файла
    $randomkey = array_rand($lines);
    echo json_encode(["TikTok" => $lines[$randomkey]], JSON_UNESCAPED_UNICODE);//возрат json
?>
