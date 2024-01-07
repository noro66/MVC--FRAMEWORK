<?php


class About extends Controller
{
    public function index()
    {
        echo 'hello from About controller ';
    }
}

$About = new About;

$About->index();
