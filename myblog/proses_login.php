<!DOCTYPE html>
<html>
 <head>
   <meta charset="utf-8">
   <title>proses</title>
 </head>
 <body>
<?php

   $username=$_POST['Nama'];
   $password=$_POST['Password'];

if ($username == "") {
 header("location:index.php");
}
else {
 $pdo = new PDO('mysql:host=localhost;dbname=dinamisx','root','');
 $exec=$pdo->prepare("SELECT * FROM user WHERE Nama = :username AND Password = :password");
 $exec->execute([
   'username' => $username,
   'password' => $password
 ]);

 $exec->setFetchMode(PDO::FETCH_ASSOC);
 $data = $exec->fetchAll();
 if (count($data) > 0) {
 $data = $data[0];
 header("location: home.php");
 }else{
   header("location: login.php");
 }
 exit;

 if ($data=="") {
   header("location:home.php");
 }

 else {
   $query = 'SELECT * from pengguna where Password ="'.$password.'"';
   $hasil_p = mysql_query($query);
   $data_p = mysql_fetch_array($hasil);
   $data_p[0];

   if ($data_p=="") {
     header("location:home.php");
   }

   else {
     session_start();
     $_SESSION["pengguna"] = $username;
     header("location:login.php");
   }
 }
 mysql_close($connect);
}

?>

 </body>
</html>
