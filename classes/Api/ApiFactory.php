<?php

namespace Api;

use Api\Telegram\TelegramBotApi;
use Api\Vk\VkBotApi;

class ApiFactory
{
    public static function make($type)
    {
        switch ($type)
        {
            case 'telegram':
                return new TelegramBotApi();

            case 'vk':
                return new VkBotApi();
        }

        return null;
    }
}