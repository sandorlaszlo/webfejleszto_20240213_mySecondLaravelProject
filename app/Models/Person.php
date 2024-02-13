<?php
    namespace App\Models;

    class Person {
        public $name;
        public $age;
        public $gender;
        public $address;

        public function __construct($name, $age, $gender, $address) {
            $this->name = $name;
            $this->age = $age;
            $this->gender = $gender;
            $this->address = $address;
        }
    }
?>