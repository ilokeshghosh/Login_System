<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <form action="login.php" method="post">
        <h2>Login</h2>
        <?php 

            if (isset($_GET['error'])) { ?>
                <p class="error"> <?php echo $_GET['error']; ?> </p>
            <?php } ?>
        
        
        <label for="">Username</label>
        <input type="text" name="uname" placeholder="Enter Username"> <br>

        <label for="">Password</label>
        <input type="password" name="password" placeholder="Enter Password"> <br>

        <button class="btn" type="submit">LOGIN</button>


       

    </form>
</body>
</html>