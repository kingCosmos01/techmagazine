<?php require '../loadlibs.php'; ?>

<?php 
    
   if(isset($_SESSION['admin-user']))
   {
        header('location: http://localhost/magazine/public/mag-admin/');
   }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="login-container">
        <div class="login-wrapper">
            <div class="head">
                <h4>Login to Dashboard</h4>
            </div>
            <?php if(isset($_GET['err'])) { ?>
                <div class="msg msg-danger" id="msg"><?php echo $_GET['err']; ?></div>
            <?php } ?>
            <form action="" method="post">
                <div class="login-group">
                    <label>Username</label><br>
                    <input type="text" name="username" class="input-field" placeholder="Enter Admin Username" required>
                </div>
                <div class="login-group">
                    <label>Password</label><br>
                    <input type="password" name="password" class="input-field" placeholder="Enter Admin Password" required>
                </div>
                <div class="login-group">
                    <input type="checkbox" name="remember_me" id=""> Remember Me
                </div>
                <button type="submit" class="btn btn-blue" name="login_admin">Continue to Dashboard</button>
            </form>
        </div>
    </div>
    <div class="footer">
        <p>&copy;  copyright Pointblanc Dev 2019 - <?php echo date('Y'); ?></p>
    </div>


    <script>
        const msg = document.getElementById('msg');

        setTimeout(() => {
            msg.style.display = "none";
        }, 5000);
    </script>
</body>
</html>