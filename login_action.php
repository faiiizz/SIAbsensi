<?php 

session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = mysqli_query($db, "SELECT * FROM tabel_user WHERE username = '".$username."' AND password='".$password."'");
$jumlah = mysqli_num_rows($query);

if($jumlah > 0){
    $row = mysqli_fetch_assoc($query);
    $_SESSION['id_user'] = $row['id_user'];        
    $_SESSION['username'] = $row['username'];        
    $_SESSION['nama'] = $row['nama'];        
    $_SESSION['email'] = $row['email'];
    
    echo "<script>alert('Login Berhasil')</script>";
    echo "<script>location = 'index.php'</script>";
}else{
    echo"<script>alert('Password Salah')</script>";
}

?>