<?php
	
include_once "cek-akses.php";
	
$error = '';
	
if (!empty($_POST)) {
	
    if($_POST['password2'] != $_POST['password']) {
	
        $error = 'Password dan ulang password harus sama';
	
    } else {
	
        try {
	
            $pdo = include "../config2.php";
	
            $query = $pdo->prepare("INSERT into user_secure (username, password, salt, nama, aktif) values(:username, :password,:salt,:nama,:aktif)");
	
            $string = str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');
	
            $salt = sha1(substr($string, 0, 8).time().rand());
	
            $query->execute(array(
	
                'username' => $_POST['username'],
	
                'password' => sha1($_POST['password'].$salt),
	
                'salt' => $salt,
	
                'nama' => $_POST['nama'],
	
                'aktif' => $_POST['aktif']
	
            ));
	
            header("Location: admin.php");
	
            exit;
	
        } catch (Exception $e) {
	
            $error = $e->getMessage();
	
        }
	
    }
	
}
	
?>

<!DOCTYPE html>
	
<html>
	
    <head>
	
        <title>Tambah User</title>
	
    </head>
	
    <body>
	
        <h1>Tambah User</h1>
	
        <?php
	
        if ($error) {
	
        echo '<h5 style="color:red">'.$error.'</h5>';
	
        }
	
        ?>
	
        <form method="POST" action="">
	
            <div>
	
                <div>Nama</div>
	
                <p>
	
                    <input type="text" name="nama"/>
	
                </p>
	
            </div>
	
            <div>
	
                <div>Username</div>
	
                <p>
	
                    <input type="text" name="username"/>
	
                </p>
	
            </div>
	
            <div>
	
                <div>Password</div>
	
                <p>
	
                    <input type="password" name="password"/>
	
                </p>
	
            </div>
	
            <div>
	
                <div>Ulang Password</div>
	
                <p>
	
                    <input type="password" name="password2"/>
	
                </p>
	
            </div>
	
            <div>
	
                <div>Aktif</div>
	
                <p>
	
                    <input type="hidden" name="aktif" value="0"/>
	
                    <input type="checkbox" name="aktif" value="1"/>
	
                </p>
	
            </div>
	
            <button type="submit">Simpan</button>
	
        </form>
	
    </body>
	
</html>