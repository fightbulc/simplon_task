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
    }