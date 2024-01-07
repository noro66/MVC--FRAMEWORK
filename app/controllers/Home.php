<?php
class Home extends Controller
{
    public function index()
    {
        echo 'hello from home controller ';
        echo '</br>';
        $model = new Model;
        // $arr['users_id'] = 9;
        $arr['users_email'] = 'ali123@gmail.com';
        $result =  $model->where($arr);
        show($result);
        $this->view('home');
    }
}
