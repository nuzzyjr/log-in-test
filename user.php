<?php

class User {
    public $email = "";
    public $password = "";
    public $password_hash = "";
    public $token = "";
    private $conn;

    //assume that email and password are unsafe

    function __construct($conn, $email, $password)
    {
        $this->email = mysqli_real_escape_string($conn, $email);
        $this->password = mysqli_real_escape_string($conn, $password);

        $this->token = md5(rand().time());
        $this->password_hash = password_hash($password, PASSWORD_BCRYPT);

        $this->conn = $conn;
    }

    function insert()
    {
        //does email already exist in DB?
        $sql = "
        INSERT INTO users(
            email,
            password,
            token,
            is_active
            ) VALUES (
            
            '{$this->email}',
            '{$this->password_hash}',
            '{$this->token}',
            '0'
            )
        ";

        //create mysql query 
        $sqlQuery = mysqli_query($this->conn, $sql);

        if (!$sqlQuery)
        {
            die ("MySQL query failed!" . mysqli_error($this->conn));
        }
    }
}



?>