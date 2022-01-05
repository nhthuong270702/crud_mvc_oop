<?php
class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $name = DB_NAME;
    private $conn;

    public function __construct()
    {
        $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->name, $this->user, $this->pass);
    }

    //lấy dữ liệu
    public function select($sql)
    {
        $sql = $this->conn->prepare($sql);
        $sql->execute();
        $data = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    // thêm sửa xóa
    public function execute($sql)
    {
        $result = $this->conn->exec($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}