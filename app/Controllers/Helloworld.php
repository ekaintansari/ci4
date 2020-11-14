<?php namespace App\Controllers;

class Helloworld extends BaseController {

    public function index($name, $npm)
    {
       // echo $this->name;
       echo $name . "<br>";
       echo $npm . "<br>";
       // echo "Hello eka";
    }

    public function show()
    {
        echo "Eka Intan Sari";
        echo "1817051022";
    }
}