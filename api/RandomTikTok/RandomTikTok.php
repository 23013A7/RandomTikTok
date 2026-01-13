<?php 
    // Заголовоки
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");//Установка того что апи вернёт json
    //Определение какой http метод используется

    $filename = '../../statick/RandomTikTok/RandomTikTok.json'; //запись имени файла в переменую
    $jsoncontent = file_get_contents($filename); //получения содержимого файла
    $data = json_decode($jsoncontent, true); //декодирования джейсона
    $randomkey = array_rand($data); //получения случаеного ключа
    echo json_encode(["TikTok" => $data[$randomkey]], JSON_UNESCAPED_UNICODE);//возрат json
?>
