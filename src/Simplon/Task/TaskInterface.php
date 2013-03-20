<?php

    namespace Simplon\Task;

    interface TaskInterface
    {
        public function run();

        public function setVo(TaskVoInterface $taskVo);

        public function getVo();
    }