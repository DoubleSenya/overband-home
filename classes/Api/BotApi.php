<?php

namespace Api;

interface BotApi
{
    public function isSetWebhook();

    public function setWebhook();

    public function getWebhookUpdates();

    public function getUpdates($offset = 0);

    public function sendMessage($chatId, $message);

    public function sendMessageWithKeyboard($chatId, $message, $keyboard);

    public function sendMessageWithRemoveKeyboard($chatId, $message);

    public function sendPhoto($chatId, $photoPath, $caption);
}