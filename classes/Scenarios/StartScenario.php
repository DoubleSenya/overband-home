<?php

namespace Scenarios;

use Scenarios\Contracts\Scenarioble;

class StartScenario implements Scenarioble
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
                $this->goHello();
                $this->goStepOne();
                break;
            case 2:
                $this->backStepTwo();
                break;
            case 4:
                $this->backStepFour();
                break;
            case 6:
                $this->backStepSix();
                break;
        }
    }

    private function goHello()
    {
        $text ='Давайте знакомиться! Я - бот веб-студии overband. Сейчас мы с вами заполним заявку на проект. Это займет меньше минуты';

        $this->api->sendMessageWithRemoveKeyboard($this->dto->chatId, $text);
    }

    private function goStepOne()
    {

        $text = 'Как я могу к вам обращаться?';

        $this->api->sendMessage($this->dto->chatId, $text);
        $this->dto->step++;
        db()->setStep($this->dto->step, $this->dto->chatId);
    }

    private function backStepTwo()
    {
        //create client
        db()->createClient($this->dto->message, $this->dto->chatId);
        //

        $this->dto->step++;
        db()->setStep($this->dto->step, $this->dto->chatId);
        $this->goStepThree();
    }

    private function goStepThree()
    {
        $keyboard = [
            ['Телефон', 'Почта']
        ];

        $text = 'Какой вид связи более удобный?';

        $this->api->sendMessageWithKeyboard($this->dto->chatId, $text, $keyboard);
        $this->dto->step++;
        db()->setStep($this->dto->step, $this->dto->chatId);
    }

    private function backStepFour()
    {
        if ($this->dto->message != 'Почта' && $this->dto->message != 'Телефон')
        {
            $this->api->sendMessage($this->dto->chatId, 'Упс, что-то не то. Выберите один из вариантов');
            return;
        }

        $this->dto->step++;
        db()->setStep($this->dto->step, $this->dto->chatId);

        $this->goStepFive();
    }

    private function goStepFive()
    {
        $text = '';
        switch ($this->dto->message)
        {
            case 'Почта':
                $text = 'Укажите вашу почту';
                break;
            case 'Телефон':
                $text = 'Укажите ваш телефон';
                break;
        }

        $this->api->sendMessageWithRemoveKeyboard($this->dto->chatId, $text);

        $this->dto->step++;
        db()->setStep($this->dto->step, $this->dto->chatId);
    }

    private function backStepSix()
    {
        // validation... //

        db()->setContactClient($this->dto->message, $this->dto->chatId);

        $this->dto->step++;

        db()->setStep($this->dto->step, $this->dto->chatId);
        $this->goFinally();
    }

    private function goFinally()
    {
        
        $this->dto->scenarioId = 1;
        $this->dto->step = 1;
        db()->setStateByChatId($this->dto->chatId, 1, 1);
        $scenario = new OrderProjectScenario($this->api, $this->dto);
        $scenario->go();
    }
}