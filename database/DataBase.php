<?php

class DataBase{
    
    // db connection property
    public $db;

    public function __construct(DBConnection $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    // select all item    
    public function getAll($table = 'product')
    {
        $result = $this->db->con->query("SELECT * FROM `{$table}`");

        $resultArray = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $resultArray;
    }
    
    // test input text
    public function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = filter_var($data, FILTER_SANITIZE_STRING);

        return $data;
    }

}