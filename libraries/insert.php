<?php
//returns true if email is not taken 
//returns false if email is taken
   function insert($conn, $user)
   {
       //does email already exist in DB?


        $email_search = "SELECT * FROM students WHERE email = '".$user->email."'";
        $result = mysqli_query($conn, $email_search);
    

        //chcek if email exists
        if (mysqli_num_rows($result) > 0)
        {
            return [false , 'Email Taken!'];
        }
        elseif (mysqli_num_rows($result) == 0)
        {
            $sql = "
            INSERT INTO students(
            email,
            pword,
            token,
            ) VALUES (
            
            '{$user->email}',
            '{$user->password_hash}',
            '{$user->token}',
            )
            ";

            //create mysql query 
            $sqlQuery = mysqli_query($conn, $sql);

            if (!$sqlQuery)
            {
                die ("MySQL query failed!" . mysqli_error($conn));
            }

            return [true];
        }

   }
?>