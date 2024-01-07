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

        $sql = "SELECT * FROM $this->table WHERE ";

        foreach ($keys as $key) {
            $sql .= "$key = :$key AND ";
        }
        foreach ($keys_not as $key) {
            $sql .= "$key != :$key AND ";
        }
        $sql = rtrim($sql, " AND ");

        $sql .= " LIMIT $this->limit OFFSET $this->offset";
        $data = array_merge($data, $not);

        return $this->query($sql, $data);
    }

    public function first($data, $not = [])
    {
        $keys = array_keys($data);
        $keys_not = array_keys($not);

        $sql = "SELECT * FROM $this->table WHERE ";

        foreach ($keys as $key) {
            $sql .= "$key = :$key AND ";
        }
        foreach ($keys_not as $key) {
            $sql .= "$key != :$key AND ";
        }
        $sql = rtrim($sql, " AND ");

        $sql .= " LIMIT $this->limit OFFSET $this->offset";
        $data = array_merge($data, $not);
        $result = $this->query($sql, $data);
        if ($result)
            return $result[0];
        return false;
    }

    public function insert($data)
    {
        $keys = array_keys($data);
        $strk = implode(', ', $keys);
        $strv = implode(', :', $keys);

        $sql = "INSERT INTO $this->table ( $strk) VALUES ( :$strv) ";
        $this->query($sql, $data);
    }

    public function update($id, $data)
    {
    }

    public function delete($id, $id_column = 'id')
    {
        $data[$id_column] = $id;
        $sql = "DELETE FROM $this->table WHERE $id_column = :$id_column";
        // echo $sql;
        $this->query($sql, $data);
    }
}
