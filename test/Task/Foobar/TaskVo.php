<?php

    namespace Task\Foobar;

    use Simplon\Task\TaskVoInterface;

    class TaskVo implements TaskVoInterface
    {
        protected $data = [];

        public function __construct(array $data)
        {
            $this->data = $data;
        }

        // ######################################

        public function getData()
        {
            return $this->getData();
        }
    }
