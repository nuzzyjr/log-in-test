<?php

class User {
    public $email = "";
    public $password = "";
    public $sname = "";
    public $fname = "";
    public $account_type = "";
    public $reward_points = 0;
    public $password_hash = "";
    public $token = "";
    public $authenticated = false;
    private $conn;



    //assume that email and password are unsafe
    function __construct($conn, $email, $password, $fname, $sname, $account_type)
    {
        $this->email = mysqli_real_escape_string($conn, $email);
        $this->password = mysqli_real_escape_string($conn, $password);
        $this->fname = mysqli_real_escape_string($conn, $fname);
        $this->sname = mysqli_real_escape_string($conn, $sname);
        $this->account_type = $account_type;
        $this->token = md5(rand().time());
        $this->password_hash = password_hash($password, PASSWORD_BCRYPT);
        $this->conn = $conn;
    }

    function authenticate()
    {
        $sql = "SELECT email, pword FROM students WHERE email='".$this->email."'";
        
        $result = $this->conn->query($sql);

        if ($row = $result->fetch_assoc())
        {
            if (password_verify($this->password, $row["pword"]))
            {
                $this->authenticated = true;
            }
            else
            {
                return 'Password incorrect';
            }
        }
         //chcek if email exists
        $email_search = "SELECT * FROM students WHERE email = '".$this->email."'";
        $result = mysqli_query($this->conn, $email_search);
    
        if (mysqli_num_rows($result) == 0)
        {
            return "Email doesn't exist";
        }
    
    }

    //returns true if user is authenticted (ran the authenticate function with no errors)
    function is_logged_in(){
        if ($this->authenticated == true)
        {
            $this->fname = mysqli_query($this->conn, "SELECT fname FROM students WHERE email ='".$this->email."'");
            $this->sname = mysqli_query($this->conn, "SELECT sname FROM students WHERE email ='".$this->email."'");
            $this->account_type = "teacher";
        }
        return $this->authenticated;
    }

}



?>