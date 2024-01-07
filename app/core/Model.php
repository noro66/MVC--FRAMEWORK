<?php
class Model
{
    use Database;
    private $table = 'users';
    private $limit = '5';
    private $offset = '0';

    public function where($data, $not = [])
    {
        $keys = array_keys($data);
        $keys_not = array_keys($not);

        $sql = "select * from $this->table where ";

        foreach ($keys  as $key) {
            $sql .= $key . " = :" . $key . " && ";
        }
        foreach ($keys_not  as $key) {
            $sql .= $key . " != :" . $key . " && ";
        }
        $sql = trim($sql, " && ");

        $sql .= " limit $this->limit offset $this->offset";
        echo $sql;
    }

    public function first($data, $not = [])
    {
    }

    public function insert($data)
    {
    }

    public function update($id, $data)
    {
    }

    public function delete($id)
    {
    }
}

$model = new Model;

// $model->test();
