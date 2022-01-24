<?php

class User {
    public $email = "";
    public $password = "";
    public $password_hash = "";
    public $token = "";
    public $authenticated = false;
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

    function authenticate()
    {
        $sql = "SELECT id, email, password, token, is_active FROM users WHERE email='".$this->email."'";
        
        $result = $this->conn->query($sql);

        if ($row = $result->fetch_assoc())
        {
            if (password_verify($this->password, $row["password"]))
            {
                $this->authenticated = true;
            }
        }
    
    }

    function is_logged_in(){
        return $this->authenticated;
    }

}



?>