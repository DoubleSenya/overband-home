<?php

namespace Updates;

class VkUpdate implements Updatable
{
    private $update;

    public function __construct($update)
    {
        $this->update = $update;
    }

    public function getId()
    {

    }

    public function getMessage()
    {
        
    }

    public function getChatId()
    {
        
    }
}