<?php

namespace Bots;

use Dto\DtoBuilder;
use Scenarios\ScenarioFactory;

abstract class Bot implements BotContract
{
    public function __construct()
    {

    }

    public function run()
    {
        $api = $this->buildApi();

        if(!$api->isSetWebhook()){
            $api->setWebhook();
            exit('Хук установлен');
        }

        $update = $api->getWebhookUpdates();

        $dto = $this->buildDto($update);

        $scenario = $this->buildScenario($dto, $api);
        $scenario->go();
    }

    abstract protected function buildApi();

    private function buildDto($update)
    {
        return DtoBuilder::make($update);
    }

    private function buildScenario($dto, $api)
    {
        return ScenarioFactory::make($dto, $api);
    }
}