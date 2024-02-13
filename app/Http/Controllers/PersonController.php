<?php

namespace App\Http\Controllers;

use App\Models\Person;

class PersonController
{
    public $emberek = array();

    public function __construct() {
        $this->emberek[] = new Person('Józsi', 28, 'férfi', 'Kecskemét');
        $this->emberek[] = new Person('Pista', 33, 'férfi', 'Győr');
        $this->emberek[] = new Person('Zita', 18, 'nő', 'Miskolc');
    }

    public function all() {
        return $this->emberek;
    }

    public function index() {
        return view('emberek', ['emberek' => $this->emberek]);
    }
}
