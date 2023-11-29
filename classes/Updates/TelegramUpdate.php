<?php

namespace Updates;

class TelegramUpdate implements Updatable
{
    private $update;

    public function __construct($update)
    {
        $this->update = $update;
    }

    public function getId()
    {
        return $this->update->update_id;
    }

    public function getMessage()
    {
        return $this->update->getMessage()->text;
    }

    public function getChatId()
    {
        return $this->update->getChat()->id;
    }
}