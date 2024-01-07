<?php
class Login extends Controller
{
    public function index()
    {
        echo 'hello from Login controller ';
        echo '</br>';

        $this->view('Login');
    }
}
