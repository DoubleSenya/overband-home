<?php

namespace Dto;

use Updates\Updatable;

class DtoBuilder
{
    public static function make(Updatable $update)
    {
        $dto = new Dto();

        $dto->chatId = $update->getChatId();
        $dto->message = $update->getMessage();

        $stateChat = db()->getStateChatByChatId($dto->chatId);

        if (empty($stateChat))
        {
            db()->createStateChat($dto->chatId, 3);
        }

        if (empty($stateChat) || $dto->message == '/start')
        {
            $stateChat['step'] = 1;
            $stateChat['scenario_type_id'] = 3;
        }

        $dto->step = $stateChat['step'];
        $dto->scenarioId = $stateChat['scenario_type_id'];

        return $dto;
    }
}