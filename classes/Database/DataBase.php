<?php

namespace Database;

use RedBeanPHP\R as R;

class DataBase
{
    private static $instance = null;


    private function __construct()
    {
        $dbhost = config('db.host');
        $dbname = config('db.name');

        $connectionString = "mysql:host={$dbhost};dbname={$dbname}";

        $login = config('db.login');
        $password = config('db.password');

        R::setup($connectionString, $login, $password);
    }

    public static function getInstance()
    {
        if(static::$instance === null)
        {
            static::$instance = new static();
        }

        return static::$instance;
    }

    public function getStateChatByChatId($chatId)
    {
        return R::getRow("SELECT step, scenario_type_id FROM state_chats WHERE chat_id = ?", [$chatId]);
    }

    public function setStep($step, $chatId)
    {
        R::exec("UPDATE state_chats SET step = ? WHERE chat_id = ?", [$step, $chatId]);
    }

    public function createClient($name, $chatId)
    {
        R::exec("INSERT INTO clients (name, chat_id) VALUES (?, ?)", [$name, $chatId]);
    }

    public function createStateChat($chatId, $scenarioTypeId)
    {
        R::exec("INSERT INTO state_chats (chat_id, scenario_type_id, step) VALUES (?, ?, ?)", [$chatId, $scenarioTypeId, 1]);
    }

    public function setContactClient($contact, $chatId)
    {
        R::exec("UPDATE clients SET contact = ? WHERE chat_id = ?", [$contact, $chatId]);
    }

    public function setProjectTypeClient($projectTypeId, $chatId)
    {
        R::exec("UPDATE clients SET project_type_id = ? WHERE chat_id = ?", [$projectTypeId, $chatId]);
    }

    public function getProjectTypeId($projectType)
    {
        return R::getCell("SELECT id FROM project_types WHERE type = ?", [$projectType]);
    }

    public function getClientByChatId($chatId)
    {
        return R::getRow("SELECT c.*, pt.type as project_type FROM clients c INNER JOIN project_types pt ON pt.id = c.project_type_id WHERE c.chat_id = ?  ORDER BY c.id DESC LIMIT 1", [$chatId]);
    }

    public function setStateByChatId($chatId, $scenarioTypeId, $step)
    {
        R::exec("UPDATE state_chats SET scenario_type_id = ?, step = ? WHERE chat_id = ?", [$scenarioTypeId, $step, $chatId]);
    }

    public function getScenarioTypeId($scenarioType)
    {
        return R::getCell("SELECT id FROM scenario_types WHERE type = ?", [$scenarioType]);
    }

    public function createClientFromForm($name, $phone, $email)
    {
        R::exec("INSERT INTO clients (name, contact) VALUES (?, ?)", [$name, $phone . ';' . $email]);
    }

    public function __destruct()
    {
        R::close();
    }

    private function __clone()
    {

    }

}