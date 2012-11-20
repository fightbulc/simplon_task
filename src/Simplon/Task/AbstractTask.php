<?php

  namespace Simplon\Task;

  abstract class AbstractTask
  {
    public function run(AbstractTaskVo $taskVo)
    {
    }

    // ##########################################

    protected function respond($message, $dump = FALSE)
    {
      if($dump === FALSE)
      {
        echo "$message\n";
      }
      else
      {
        var_dump($message);
      }
    }
  }
