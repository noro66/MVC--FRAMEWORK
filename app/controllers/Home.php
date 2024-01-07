<?php
class Home extends Controller
{
    public function index()
    {
        echo 'hello from home controller ';
        echo '</br>';
        $model = new Model;
        $arr['users_id'] = null;
        $arr['users_uid'] = 'mohamed45';
        $arr['users_pwd'] = 'password1342';
        $arr['users_email'] = 'mohamed1234@gmail.com';
        $result =  $model->delete('moha', 'users_uid');
        show($result);
        $this->view('home');
    }
}
