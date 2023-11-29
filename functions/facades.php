<?php

function db()
{
    return \Database\DataBase::getInstance();
}

function config($key)
{
    $config = include 'config.php';

    $depthKeys = explode('.', $key);

    $key = array_pop($depthKeys);

    foreach ($depthKeys as $depthKey)
    {
        $config = $config[$depthKey];
    }

    return $config[$key];
}