<?php

namespace Api\Vk;

use Api\BotApi;
use Telegram\Bot\Api;

class VkBotApi implements BotApi
{
    private $api;

    public function __construct()
    {
        $token = config('vk.token');

        $this->api = new Api($token);
    }

    public function sendMessage($chatId, $message)
    {
        // TODO: Implement sendMessage() method.
    }

    public function sendMessageWithKeyboard($chatId, $message, $keyboard)
    {
        // TODO: Implement sendMessageWithKeyboard() method.
    }

    public function sendPhoto($chatId, $photoPath, $caption)
    {
        // TODO: Implement sendPhoto() method.
    }


    public function isSetWebhook()
    {
        // TODO: Implement isSetWebhook() method.
    }

    public function setWebhook()
    {
        // TODO: Implement setWebhook() method.
    }

    public function getWebhookUpdates()
    {
        // TODO: Implement getWebhookUpdate() method.
    }

    public function getUpdates($offset = 0)
    {
        // TODO: Implement getUpdates() method.
    }
}