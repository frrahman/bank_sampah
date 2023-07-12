<?php

include '../config.php';

if(isset($_POST["tujuan"])){

$tujuan = $_POST["tujuan"];

if($tujuan == "LOGIN"){
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $query_sql = "SELECT * FROM users 
                           WHERE username = '$username' AND password = '$password'";
    
    $result = mysqli_query($conn, $query_sql);

    if(mysqli_num_rows($result) > 0){
        header("Location: ../dashboard_admin/index.html");
    }else{
        // echo "<h2>Username atau Password Salah!</h2>";
        header("Location: login.php");
    }
}

// }else{
//     $username = $_POST["username"];
//     $password = $_POST["password"];
//     $email = $_POST["email"];
    
//     $query_sql = "INSERT INTO tbl_pendaftaran (username, password, email) 
//                                        VALUES ('$username', '$password', '$email')";

//     if (mysqli_query($conn, $query_sql)) {
//         echo "
//                 <h1>Username $username berhasil terdaftar</h1>
//                 <a href='pages/login.php'>Kembali Login</h1>
//             ";
//     } else {
//         echo "Pendaftaran Gagal : " . mysqli_error($conn);
//     }
// }
}


// tutup koneksi
mysqli_close($conn);
?>