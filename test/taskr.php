<?php

  $composer = require __DIR__ . '/../vendor/autoload.php';

  // initiate task
  new \Simplon\Task\Task($composer, __DIR__);