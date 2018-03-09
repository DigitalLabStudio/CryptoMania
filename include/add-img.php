<?php

function upload_file($file, $upload_dir= '../article-img', $allowed_types= array('image/png','image/x-png','image/jpeg','image/webp','image/gif')){

    $blacklist = array(".php", ".phtml", ".php3", ".php4");
    $ext = substr($filename, strrpos($filename,'.'), strlen($filename)-1); // В переменную $ext заносим расширение загруженного файла.
    if(in_array($ext,$blacklist )){
        return array('error' => 'Запрещено загружать исполняемые файлы');}

    $upload_dir = dirname(__FILE__).DIRECTORY_SEPARATOR.$upload_dir.DIRECTORY_SEPARATOR; // Место, куда будут загружаться файлы.
    $max_filesize = 8388608; // Максимальный размер загружаемого файла в байтах (в данном случае он равен 8 Мб).
    $filename = $file['name']; // В переменную $filename заносим точное имя файла.
//    if(!is_writable($upload_dir))  // Проверяем, доступна ли на запись папка, определенная нами под загрузку файлов.
//        return array('error' => 'Невозможно загрузить файл в папку "'.$upload_dir.'". Установите права доступа - 777.');

    if(!in_array($file['type'], $allowed_types))
        return array('error' => 'Данный тип файла не поддерживается.');

    if(filesize($file['tmp_name']) > $max_filesize)
        return array('error' => 'файл слишком большой. максимальный размер '.intval($max_filesize/(1024*1024)).'мб');


    $last_article = R::getAll("SELECT * FROM `articles` ORDER BY id DESC LIMIT 1");
    $last_article_count = $last_article[0]['id'] + 1;
    if(!move_uploaded_file($file['tmp_name'],$upload_dir.$last_article_count.substr($filename, strrpos($filename,'.'), strlen($filename)-1))) // Загружаем файл в указанную папку.
        return array('error' => 'При загрузке возникли ошибки. Попробуйте ещё раз.');

    return Array('filename' => $last_article_count.substr($filename, strrpos($filename,'.'), strlen($filename)-1));
}