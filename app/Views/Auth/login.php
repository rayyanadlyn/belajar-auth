<html>
    <head>
        <title>Tutorial Login Dan Register</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <?php 
            $session = session();
            $login = $session->getFlashdata('login');
            $username = $session->getFlashdata('username');
            $password = $session->getFlashdata('password');
        ?>
       
        <div class="mx-auto p-2" style=" width: 200px;"> 
        <h5 class="mt-5">Login</h5>
        
        <?php if($username){ ?>
            <p style="color:red"><?php echo $username?></p>
        <?php } ?>
        
        <?php if($password){ ?>
            <p style="color:red"><?php echo $password?></p>
        <?php } ?>
        
        <?php if($login){ ?>
            <p style="color:green"><?php echo $login?></p>
        <?php } ?>
        
        <form method="post" action="/auth/valid_login">
            Username: <br>
            <input type="text" name="username" required><br>
            Password: <br>
            <input type="password" name="password" required><br>
            <button type="submit" class="btn btn-secondary mt-3" name="login">Login</button>
        </form>
        <p>
            <a href="/auth/register">Belum punya akun?</a>
        </p>
        </div>
       
    </body>
</html> 