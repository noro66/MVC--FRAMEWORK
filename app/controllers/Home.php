<?php


class Home extends Controller
{
    public function index()
    {
        echo 'hello from home controller ';
    }
}

$home = new Home;

$home->index();
