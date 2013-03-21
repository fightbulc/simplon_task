<?php

    namespace Simplon\Task;

    abstract class TaskAbstract implements TaskInterface
    {
        protected $_taskVo;

        // ######################################

        /**
         * @param TaskVoInterface $taskVo
         * @return $this
         */
        public function setVo(TaskVoInterface $taskVo)
        {
            $this->_taskVo = $taskVo;

            return $this;
        }

        // ######################################

        /**
         * @return mixed
         */
        public function getVo()
        {
            return $this->_taskVo;
        }

        // ######################################

        /**
         * @param $message
         * @param $colorFg
         * @param $colorBg
         */
        private function _writeLine($message, $colorFg, $colorBg)
        {
            echo TaskColor::$colorFg($message, $colorBg) . "\n";
        }

        // ######################################

        /**
         * @param $text
         */
        public function writeError($text)
        {
            $this->_writeLine($text, 'white', 'red');
        }

        // ######################################

        /**
         * @param $text
         */
        public function writeSuccess($text)
        {
            $this->_writeLine($text, 'white', 'green');
        }

        // ######################################

        /**
         * @param $text
         */
        public function writeNote($text)
        {
            $this->_writeLine($text, 'darkGrey', 'lightGrey');
        }

        // ######################################

        /**
         * @param $text
         */
        public function writeNormal($text)
        {
            $this->_writeLine($text, 'white', 'black');
        }

        // ######################################

        /**
         * @param $text
         */
        public function writeSubtle($text)
        {
            $this->_writeLine($text, 'darkGrey', 'black');
        }

        // ######################################

        /**
         * @param $text
         */
        public function writeBlink($text)
        {
            $this->_writeLine($text, 'lightGreen', 'blink');
        }

        // ######################################

        /**
         * @param int $count
         */
        public function bell($count = 1)
        {
            TaskColor::bell($count);
        }
    }