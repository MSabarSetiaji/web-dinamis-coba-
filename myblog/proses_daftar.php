<?php
  $conn = mysqli_connect("localhost", "root", "", "dinamisx");
    $Nama = $_POST['Nama'];
    $Password = $_POST['Password'];
    $Email = $_POST['Email'];
    $query = 'INSERT INTO user
    (Nama, Password, Email)
    VALUES ("'.$Nama.'", "'.$Password.'","'.$Email.'")';
    $conn->query($query);


    mysqli_close($conn);
    header('location:login.php');
 ?>
