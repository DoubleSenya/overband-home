<?php

namespace Scenarios;

use Scenarios\Contracts\Scenarioble;

class MenuScenario implements Scenarioble
{
    private $api;
    private $dto;

    private $menu = [
        ['Заявка на проект']
    ];

    public function __construct($api, $dto)
    {
        $this->api = $api;
        $this->dto = $dto;
    }

    public function go(): void
    {
        switch ($this->dto->step)
        {
            case 1:
                $this->showMenu();
                break;
            case 2:
                $this->backMenu();
                break;
        }
    }

    private function showMenu()
    {
        $menuText = 'Вы можете отправить заявку повторно';
        $this->api->sendMessageWithKeyboard($this->dto->chatId, $menuText, $this->menu);

        $this->dto->step++;
        db()->setStep($this->dto->step, $this->dto->chatId);
    }

    private function backMenu()
    {
        if ($this->dto->message != 'Заявка на проект')
        {
            $this->api->sendMessageWithKeyboard($this->dto->chatId, 'Выберите вариант из меню', $this->menu);
            return;
        }

        $this->goFinally();
    }

    private function goFinally()
    {
        $mapScenarios = [
            'Заявка на проект' => 'order_project',
        ];

        $scenarioType = $mapScenarios[$this->dto->message];
        $scenarioTypeId = db()->getScenarioTypeId($scenarioType);

        $this->dto->scenarioId = $scenarioTypeId;
        $this->dto->step = 1;

        db()->setStateByChatId($this->dto->chatId, $this->dto->scenarioId, $this->dto->step);

        $scenario = ScenarioFactory::make($this->dto, $this->api);
        $scenario->go();
    }
}