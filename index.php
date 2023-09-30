<?php
    class User
    {
        private $name = 'Nissan';
        public $color = 'red';
    }

    public function setName(string $name){
        $this ->name = $name;
    }

    public function getName(){
        return $this ->name;
    }

    
?>
