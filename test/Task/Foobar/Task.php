<?php

  namespace Task\Foobar;

  class Task
  {
    public function run(\Simplon\Task\AbstractTaskVo $taskVo)
    {
      var_dump($taskVo);
    }
  }
