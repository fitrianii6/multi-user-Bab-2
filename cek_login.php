<?php
session_start();
include'koneksi.php';
$username =$_POST['username'];
$password =$_POST['password'];
$login = mysqli_query($koneksi,"select *from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
if($cek>0){
	$data = mysqli_fetch_assoc($login);
	if($data['level']=="admin"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		header("localhost:halaman_admin.php");
	}else if($data['level']=="pegawai"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "pegawai";
		header("localhost:halaman_pegawai.php");
	}else if($data['level']=="pengurus"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "pengurus";
		header("localhost:halaman_pengurus.php");
	}else{
		header("localhost:index.php?pesan=gagal");
	}
}else{
	header("localhost:index.php?pesan=gagal");
}
?>