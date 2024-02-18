<?php
 include "koneksi.php"

 $username = $_POST['username'];
 $password = $_POST['password'];

 $sql = mysql_query("SELECT * FROM login_mahasiswa WHERE username = '".$username"' AND password = '".$password"' ") or die(mysql_error());

 if (mysql_num_rows($sql) == 0) {
 	echo '<script language = "jacascript">
 	alert("username gagal")';</script>';
 }else{
 	echo '<script language = "jacascript">
 	alert("username berhasil")'; document.location="index.html"; </script>';
 }


?>