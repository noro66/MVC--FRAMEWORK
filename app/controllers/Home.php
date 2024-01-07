<?php
class Home extends Controller
{
    public function index()
    {
        echo 'hello from home controller ';
        echo '</br>';
        $model = new Model;
        $arr['id'] = 3;
        $result =  $model->where($arr, ['name' => 'moha']);
        echo $result;
        $this->view('home');
    }
}
