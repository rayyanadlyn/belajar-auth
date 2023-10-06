<html>
    <head>
        <title>Admin</title>
    </head>
    <body>
        <?php $session = session() ?>
        <h4>Selamat datang user!</h4>
        <?php echo $session->get('username')?>
        <a href="/auth/login">Logout</a>
    </body>
</html>