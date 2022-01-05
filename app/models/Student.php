<?php
class Student
{
    private $db;
    private $table_name = 'Student';

    public function __construct()
    {
        $this->db = new Database();
    }

    // lay du lieu
    public function getStudent()
    {
        $sql = "SELECT * FROM " . $this->table_name;
        $result = $this->db->select($sql);
        return $result;
    }
    //them du lieu
    public function createStudent($name, $email, $address)
    {
        $sql = "INSERT INTO " . $this->table_name . " (name,email,address)
                VALUES ('$name','$email','$address')";
        $result = $this->db->execute($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    //xem thong tin theo id
    public function findStudentById($id)
    {
        $sql = "SELECT * FROM " . $this->table_name . " WHERE id = '$id'";
        $result = $this->db->select($sql);
        return $result;
    }
    //tim kiem du lieu theo name
    public function searchStudentByName($name)
    {
        $sql = "SELECT * FROM " . $this->table_name . " WHERE name LIKE '%$name%'";
        $result = $this->db->select($sql);
        return $result;
    }
    // cap nhat du lieu
    public function updateStudent($id, $name, $mail, $add)
    {
        $sql = "UPDATE " . $this->table_name . " SET name = '$name',
                                    email = '$mail',
                                    address = '$add'
                                WHERE id = '$id'";
        $result = $this->db->execute($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    // xoa du lieu
    public function deleteStudent($id)
    {
        $sql = "DELETE FROM " . $this->table_name . " WHERE id = '$id'";
        $result = $this->db->execute($sql);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}