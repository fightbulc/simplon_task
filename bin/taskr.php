#!/usr/bin/env php
<?php

    // clear console
    use Simplon\Task\TaskAbstract;
    use Simplon\Task\TaskVoInterface;

    system('clear');

    $composer = require __DIR__ . '/../vendor/autoload.php';
    $composer->add('Task', __DIR__ . '/');

    // ##############################################

    // get console parameter
    $parameters = $_SERVER['argv'];

    // drop first parameter
    array_shift($parameters);

    // get task class name
    $className = array_shift($parameters);

    // prepare run variables
    $runVariables = [];

    if(! empty($parameters))
    {
        foreach($parameters as $val)
        {
            list($k, $v) = explode('=', $val);
            $runVariables[$k] = $v;
        }
    }

    // ##############################################

    // task class instance name
    $classInstanceName = 'Task\\' . $className . '\Task';

    /** @var $classInstance TaskAbstract */
    $classInstance = new $classInstanceName();

    // taskVo class instance name
    $classVoInstanceName = 'Task\\' . $className . '\TaskVo';

    /** @var $classVoInstance TaskVoInterface */
    $classVoInstance = new $classVoInstanceName($runVariables);

    // ##############################################

    echo "#########################################\n\n";
    echo "Task: $className\n";
    echo "Parameters: " . join(', ', $parameters) . "\n";
    echo "Response:\n\n";

    // run task call
    $classInstance
        ->setVo($classVoInstance)
        ->run();

    echo "\n";
    echo "#########################################\n\n";
