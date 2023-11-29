<?php

namespace Bots;

use Api\ApiFactory;

class TelegramBot extends Bot
{
    protected function buildApi()
    {
        return ApiFactory::make('telegram');
    }

}