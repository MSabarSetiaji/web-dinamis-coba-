<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>myblog</title>
</head>

    <style media="screen">
    .Menu{
      position: relative;
      z-index: 1;
      background: rgb(50,100,50);
      margin: 0 auto 50px;
      width: 360px;
      padding: 15px;
      text-align: center;
      box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }
    .jarak{
      padding-top: 50px;
    }
    .tulisan{
      text-align: center;
      padding: 10px 100px 10px 100px;
      background-color: rgba(100, 100, 100, 0.5);
    }

    *{padding:0;margin:0;
    }
    body {
    background: rgb(0, 49, 55);
    height: 100%;
    font-family: arial;
    background-position: center;
    background-color: #eee;
    }
    .header {
    width: 100%;
    position: fixed;
    box-shadow: 0px 0px 20px  black;
    height: 60px;
    background: linear-gradient(-90deg, aqua, rgb(255, 255, 0));
    font-family: Agency FB;
    font-size: 14pt;
    text-align: center;
    line-height: 60px;
    }
    .header::after {
    clear: both;
    content: '';
    display: block;
    }
    .brand {
    width: 20%;
    float:left;
    font-size: 1em;
    text-align: center;
    line-height: 70px;
    }
    .header > ul {
    width: 80%;
    list-style: none;
    float:left;
    }
    .active{
      border-bottom: 5px solid white;
    }
    .header > ul > li {
    width: 10.8%;
    float: left;
    }
     ul > li > a{
    text-decoration: none;
    color: white;
    line-height: 50px;
    font-size: 1em;
    }
    .header > ul > li > a:hover{
      transform: scale(1.2);
      color: white;
      padding: 15px;
      border-bottom: 5px solid white;
      -webkit-transition: .3s;
      transition: .3s;
      cursor:pointer;
      color:white;
    }
    @font-face {
    font-family: 'font';
    src: url('rubes/fon.ttf');
    }
    .brand> a {
      font-size: 15pt;
      font-family: 'font';
      color:white;
      text-decoration: none;
    }
    .brand1{
      border-collapse: collapse;
      border: 2px solid black;
      margin-top: 250px;
    }
    .konten{
      background: white;
      padding: 100px;
      width: 50%;
      margin: auto;
      color: black;
      min-height:450px;
    }

    </style>
 <body>
   <div class="header">
     <div class="brand">
       <a href="home.php">
         <h1>Wartech</h1>
       </a>
     </div>
     <ul>
       <li><a href="medsos.php" >Media Sosial</a></li>
       <li><a href="gadget.php">Gadget</a></li>
       <li><a href="game.php">Game</a></li>
       <li><a href="apps.php">Apps</a></li>
       <li><a href="tips.php" class="active">Tips & Trick</a></li>
<li style="float:right;"><a href="logout.php" onclick="return confirm('Apakah Anda Yakin ?');">LOG-OUT</a></li>
     </ul>
   </div>
<div class="konten">
  <?php
    $con = mysqli_connect("localhost", "root", "", "wartech");
    $query = 'SELECT * from artikel where type = "Tips"';
    $hasil = mysqli_query($con, $query);
    while ($hasil_artikel = mysqli_fetch_assoc($hasil)) {
      echo "<div class='artikel' style='position:relative; display: block; width:90%; min-height:200px; border: 2px solid rgb(30, 100, 150');>
        <p class='judul_artikel' style='margin: 20px;'> ".$hasil_artikel['judul']."</p>
        <p class='isi_artikel' style='margin:20px; text-align:justify;'>" . $hasil_artikel['isi']."</p>
      </div> <br>";
    }
   ?>
 </div>
   </body>
</html>
