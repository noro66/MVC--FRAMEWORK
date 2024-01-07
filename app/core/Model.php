<?php
class Model
{
    use Database;
    public function test()
    {
        $sql = "select * from users";
        $result = $this->query($sql);
        show($result);
    }
}

$model = new Model;

$model->test();
