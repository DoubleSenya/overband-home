<?php

namespace Scenarios;

use Scenarios\Contracts\Scenarioble;

class OopsScenario implements Scenarioble
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
        $this->api->sendMessage('Такого варианта нет... Выберите один из предложенных в меню');
    }
}