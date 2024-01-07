<?php
class Home extends Controller
{
    public function index()
    {
        echo 'hello from home controller ';
        echo '</br>';
        $model = new Model;
        $arr['users_uid'] = 'johayna';
        $arr['users_pwd'] = 'passwrdjohayna';
        $arr['users_email'] = 'johayna234@gmail.com';
        $result = $model->update(14, $arr, 'users_id');
        show($result);
        $this->view('home');
    }
}
