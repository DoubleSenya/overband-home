<?php

namespace Api\Telegram;

use Api\BotApi;
use Telegram\Bot\Api;
use Telegram\Bot\FileUpload\InputFile;
use Telegram\Bot\Keyboard\Keyboard;
use Updates\TelegramUpdate;

class TelegramBotApi implements BotApi
{
    private $api;

    public function __construct()
    {
        $token = config('telegram.token');

        $this->api = new Api($token);
    }

    public function isSetWebhook()
    {
        $info = $this->api->getWebhookInfo();
        return !empty($info->url);
    }

    public function setWebhook()
    {
        $url = config('telegram.webhook.url');
        $this->api->setWebhook([
            'url' => $url,
        ]);
    }

    public function getWebhookUpdates()
    {
        $update = $this->api->getWebhookUpdate();

        return new TelegramUpdate($update);
    }

    public function getUpdates($offset = 0)
    {
        $params = [];

        if($offset != 0)
            $params['offset'] = $offset;

        $updates = $this->api->getUpdates($params);

        $tgUpdates = [];
        foreach($updates as $update)
        {
            $tgUpdates[] = new TelegramUpdate($update);
        }

        return $tgUpdates;
    }

    public function sendMessage($chatId, $message)
    {
        $this->api->sendMessage([
            'chat_id' => $chatId,
            'text' => $message,
        ]);
    }

    public function sendMessageWithKeyboard($chatId, $message, $keyboard)
    {
        $replyKeyboard = Keyboard::make([
            'keyboard' => $keyboard,
            'resize_keyboard' => true,
            'one_time_keyboard' => true,
            'is_persistent' => true,
        ]);

        $this->api->sendMessage([
            'chat_id' => $chatId,
            'text' => $message,
            'reply_markup' => $replyKeyboard,
        ]);
    }

    public function sendMessageWithRemoveKeyboard($chatId, $message)
    {
        $keyboardRemove = Keyboard::remove([
            'remove_keyboard' => true,
        ]);

        $this->api->sendMessage([
            'chat_id' => $chatId,
            'text' => $message,
            'reply_markup' => $keyboardRemove,
        ]);
    }

    public function sendPhoto($chatId, $photoPath, $caption)
    {
        $inputFile = InputFile::create($photoPath);

        $this->api->sendPhoto([
            'chat_id' => $chatId,
            'photo' => $inputFile,
            'caption' => $caption,
        ]);
    }
}