<?php
class Database
{
    private function connect()
    {
        $dsn = "mysql:hostname=" . DBHOST . ";dbname=" . DBNAME;
        $pdo = new PDO($dsn, DBUSER, DBPASS);
        return $pdo;
    }
    private function query($sql, $data = [])
    {
        $pdo = $this->connect();
        $stmt = $pdo->prepare($sql);
        $check = $stmt->execute($data);
        if ($check) {
            $result = $stmt->fetchAll(PDO::FETCH_OBJ);
            if (is_array($result) && count($result)) {
                return $result;
            }
        }
    }
}
