<?php

  namespace Simplon\Task;

  class Task extends AbstractTask
  {
    public function __construct($composer, $taskRootPath = __DIR__)
    {
      // clear console
      system('clear');

      // set task root path
      $composer->add('Task\\', $taskRootPath);

      // get console parameter
      $parameters = $_SERVER['argv'];

      // drop first parameter
      array_shift($parameters);

      // get task class name
      $className = array_shift($parameters);

      // prepare run variables
      $runVariables = array();

      if(! empty($parameters))
      {
        foreach($parameters as $val)
        {
          list($k, $v) = explode('=', $val);
          $runVariables[$k] = $v;
        }
      }

      // task class instance
      $classInstanceName = 'Task\\' . $className . '\Task';

      /** @var $classInstance AbstractTask */
      $classInstance = new $classInstanceName();

      // taskVo class instance
      $classVoInstanceName = 'Task\\' . $className . '\TaskVo';

      /** @var $classVoInstance \Simplon\Task\AbstractTaskVo */
      $classVoInstance = new $classVoInstanceName();
      $classVoInstance->setData($runVariables);

      echo "#########################################\n\n";
      echo "Task: $className\n";
      echo "Parameters: " . join(', ', $parameters) . "\n";
      echo "Response:\n\n";

      // run task call
      $classInstance->run($classVoInstance);

      echo "\n";
      echo "#########################################\n\n";
    }
  }