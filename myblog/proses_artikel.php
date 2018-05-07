<?php
  $judul = $_POST['Judul'];
  $type = $_POST['Type'];
  $isi = $_POST['Isi'];

  if ($judul == "" || $type=="" || $isi == "") {
    header('location:home.php');
  }
  else {
    $con = mysqli_connect("localhost", "root", "", "wartech");
    $query = 'INSERT into artikel(judul, type, isi) VALUES ("'.$judul.'", "'.$type.'", "'.$isi.'")';
    $con->query($query);

    header('location:home.php');
  }

  mysqli_close($con);
?>
