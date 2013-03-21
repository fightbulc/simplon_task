<?php

    namespace Task\Foobar;

    use Simplon\Task\TaskAbstract;

    class Task extends TaskAbstract
    {
        public function run()
        {
            $this->writeError('Error');
            $this->writeSuccess('Success');
            $this->writeNote('Note');
            $this->writeNormal('Normal');
            $this->writeSubtle('Subtle');
            $this->bell();
        }
    }
