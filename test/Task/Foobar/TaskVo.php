<?php

  namespace Task\Foobar;

  class TaskVo extends \Simplon\Task\AbstractTaskVo
  {
    public function getId()
    {
      return $this->getByKey('id');
    }
  }
