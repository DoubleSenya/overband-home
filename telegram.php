<?php

    require __DIR__.'/vendor/autoload.php';
    require_once  __DIR__.'/functions/facades.php';

    spl_autoload_register(function ($file) {
        $file = __DIR__ . '/classes/' . str_replace("\\", "/", $file) . '.php';

        if(file_exists($file))
        {
            require_once $file;
        }
    });

    $telegramBot = new \Bots\TelegramBot();
    $telegramBot->run();