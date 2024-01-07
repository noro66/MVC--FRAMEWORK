<?php


class _404 extends Controller
{
    public function index()
    {
        echo 'hello from _404 controller ';
    }
}

$_404 = new _404;

$_404->index();
