
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

    <div style="width:33%; margin:auto;">
    <h1 style="padding-top:20px;">Enter your account details</h1>
    <form style="padding-top:10px;" action="login-action.php" method="post">
    
        <label for="email" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" required/> <br/>

        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" required/> <br/>
        <p style="color:red" ><?php if (isset($_SESSION['login_err'])){ echo $_SESSION['login_err']; unset($_SESSION['login_err']); }?></p>
        <button type="submit" class="btn btn-primary">Login</button>
       
    </form>
    </div>
</body>
</html>