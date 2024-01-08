<?php
class Home extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {
        // echo 'hello from home controller ';
        // echo '</br>';
        // $user = new User;
        // $arr['users_uid'] = 'last';
        // $arr['users_pwd'] = 'lastPassword';
        // $arr['users_email'] = 'lastemail@gmail.com';
        // $result = $user->fitch_All();

        show($a);
        $this->view('home');
    }
}
