<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login form</title>
    <link rel="stylesheet" href="login.css" />
</head>

<body>
    <div class="login-card">
        <h2>Admin FORMATIF</h2>
        <P>Sign in to start your session</P>

        <?php if(!empty($_GET['gagal'])){?>
        <?php if($_GET['gagal']=="userKosong"){?>
        <span class="text-danger">
            Maaf Username Tidak Boleh Kosong
        </span>
        <?php } else if($_GET['gagal']=="passKosong"){?>
        <span class="text-danger">
            Maaf Password Tidak Boleh Kosong
        </span> 
        <?php } else {?>
        <span class="text-danger">
            Maaf Username dan Password Anda Salah
        </span>
        <?php }?>
        <?php }?>

        <form class="login-form" action="index.php?include=konfirmasi-login" method="post">
            <input type="text" placeholder="Username" name="username">
            <input type="password" placeholder="Password" name="password">

            <button type="submit" name="login" value="login">
                <a>SIGN IN</a>
            </button>
        </form>
    </div>
</body>

</html>