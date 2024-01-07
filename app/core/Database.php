<?php

trait Database
{
    private function connect()
    {
        $dsn = "mysql:host=" . DBHOST . ";dbname=" . DBNAME;
        $pdo = new PDO($dsn, DBUSER, DBPASS);
        return $pdo;
    }

    protected function query($sql, $data = [])
    {
        $pdo = $this->connect();
        $stmt = $pdo->prepare($sql);

        foreach ($data as $key => $value) {
            $stmt->bindParam(':' . $key, $value);
        }

        $check = $stmt->execute($data);

        if ($check) {
            $result = $stmt->fetchAll(PDO::FETCH_OBJ);
            if (is_array($result) && count($result)) {
                return $result;
            }
        } else {
            return false;
        }
    }

    protected function getRow($sql, $data = [])
    {
        $pdo = $this->connect();
        $stmt = $pdo->prepare($sql);
        $check = $stmt->execute($data);

        if ($check) {
            $result = $stmt->fetchAll(PDO::FETCH_OBJ);
            if (is_array($result) && count($result)) {
                return $result[0];
            }
        } else {
            return false;
        }
    }
}
