<?php

namespace Updates;

interface Updatable
{
    public function getId();

    public function getMessage();

    public function getChatId();

}