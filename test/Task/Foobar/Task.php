<?php

    namespace Task\Foobar;

    use Simplon\Task\TaskAbstract;

    class Task extends TaskAbstract
    {
        public function run()
        {
            var_dump($this->getVo());
        }
    }
