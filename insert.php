<?php
   function insert($conn, $user)
   {
       //does email already exist in DB?

        $email_search = "SELECT * FROM users WHERE email = '".$user->email."'";
        $result = mysqli_query($conn, $email_search);
        

        if ($not_dupe)
        {

            $sql = "
            INSERT INTO users(
                email,
                password,
                token,
                is_active
                ) VALUES (
                
                '{$user->email}',
                '{$user->password_hash}',
                '{$user->token}',
                '0'
                )
            ";

            //create mysql query 
            $sqlQuery = mysqli_query($conn, $sql);

            if (!$sqlQuery)
            {
                die ("MySQL query failed!" . mysqli_error($conn));
            }

        }

        else
        {
           echo "Email taken!";
        }
       
   }
?>