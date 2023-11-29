<?php

namespace Scenarios;

class ScenarioFactory
{
    public static function make($dto, $api)
    {
        switch ($dto->scenarioId)
        {
            case 1:
                return new OrderProjectScenario($api, $dto);

            case 2:
                return new MenuScenario($api, $dto);

            case 3:
                return new StartScenario($api, $dto);
        }

        return new OopsScenario($api, $dto);
    }
}