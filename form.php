<?php

use Api\ApiFactory;

require __DIR__.'/vendor/autoload.php';
require_once  __DIR__.'/functions/facades.php';

spl_autoload_register(function ($file) {
    $file = __DIR__ . '/classes/' . str_replace("\\", "/", $file) . '.php';

    if(file_exists($file))
    {
        require_once $file;
    }
});

$name = isset($_POST['name']) ? $_POST['name'] : null;
$phone = isset($_POST['phone']) ? $_POST['phone'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;

//validation()
// ....
//

db()->createClientFromForm($name, $phone, $email);

$text = [];

$text[] = "Новая заявка:\n";
$text[] = "Имя - " . $name;
$text[] = "Телефон - " . ($phone ?? 'не указан');
$text[] = "Почта - " . ($email ?? 'не указана');

$text = implode("\n", $text);

$api = ApiFactory::make('telegram');
$api->sendMessage('-4084614269', $text);

echo json_encode([
    'code' => 0,
    'text' => 'success',
]);