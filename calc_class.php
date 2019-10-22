<?php
    class Calculator {
        public $action, $number1, $number2;
        private $test = '<li>test';

        public function __construct($action,$number1,$number2) {
            $this->action = $action;
            $this->number1 = $number1;
            $this->number2 = $number2;
        }

        public function count() {
            $result = 0;
            switch($this->action) {
                case 'sum':
                    $result = $this->number1 + $this->number2;
                break;
                case 'sub':
                    $result = $this->number1 - $this->number2;
                break;
                case 'mul':
                    $result = $this->number1 * $this->number2;
                break;
                case 'div':
                    $result = $this->number1 / $this->number2;
                break;
            }
            echo $result;
        }

        public function getTest() {
            return $this->test;
        }
    }
?>