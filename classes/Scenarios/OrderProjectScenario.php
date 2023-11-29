<?php

namespace Scenarios;

use Scenarios\Contracts\Scenarioble;

class OrderProjectScenario implements Scenarioble
{
    private $api;
    private $dto;

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
                $this->goStepOne();
                break;
            case 2:
                $this->backStepTwo();
                break;
        }
    }

    private function goStepOne()
    {
        $keyboard = [
            ['Лендинг', 'Сайт', 'CRM-система'],
            ['Другое'],
            ['Не знаю/не определился'],
        ];

        $text = 'Укажите тип проекта';

        $this->api->sendMessageWithKeyBoard($this->dto->chatId, $text, $keyboard);

        $this->dto->step++;
        db()->setStep($this->dto->step, $this->dto->chatId);
    }

    private function backStepTwo()
    {
        if ($this->dto->message != 'Лендинг' && $this->dto->message != 'Сайт'
            && $this->dto->message != 'CRM-система' && $this->dto->message != 'Другое'
            && $this->dto->message != 'Не знаю/не определился')
        {
            $this->api->sendMessage($this->dto->chatId, 'Упс, что-то не то. Выберите один из вариантов');

            return;
        }

        $projectTypeId = db()->getProjectTypeId($this->dto->message);
        db()->setProjectTypeClient($projectTypeId, $this->dto->chatId);

        $this->dto->step++;
        db()->setStep($this->dto->step, $this->dto->chatId);

        $this->goFinally();
    }

    private function goFinally()
    {
        $photo = $this->getPhoto();
        $this->api->sendPhoto($this->dto->chatId, $photo['path'], $photo['caption']);

        $text = "Ваша заявка обработана! Мы свяжемся с вами в течении 30 минут, а пока вы можете насладиться картиной";
        $this->api->sendMessageWithRemoveKeyboard($this->dto->chatId, $text);


        $clientInfo = db()->getClientByChatId($this->dto->chatId);

        $text = [];

        $text[] = "Новая заявка:\n";
        $text[] = "Имя - " . $clientInfo['name'];
        $text[] = "Контакт - " . $clientInfo['contact'];

        $text[] = "Тип проекта - " . $clientInfo['project_type'];

        $text = implode("\n", $text);

        
        $this->api->sendMessage('-4084614269', $text);

        $this->dto->scenarioId = 2;
        $this->dto->step = 1;
        db()->setStateByChatId($this->dto->chatId, 2, 1);
        $menuScenario = new MenuScenario($this->api, $this->dto);
        $menuScenario->go();
    }

    private function getPhoto()
    {
        $mapPhoto = [
            1 => [
                'path' => './images/1.jpg',
                'caption' => 'Сальвадор Дали. Галатея сфер',
            ],
            2 => [
                'path' => './images/2.jpg',
                'caption' => 'Винсент Ван Гог. Звездная ночь над Роной',
            ],
            3 => [
                'path' => './images/3.jpg',
                'caption' => 'Клод Моне. Женщина с зонтиком',
            ],
            4 => [
                'path' => './images/4.jpg',
                'caption' => 'Камиль Писсарро. Бульвар Монмартр ночью',
            ],
        ];



        return $mapPhoto[random_int(1, 4)];
    }
}