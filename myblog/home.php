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
    z-index: 9999;
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
       <li><a href="medsos.php">Media Sosial</a></li>
       <li><a href="gadget.php">Gadget</a></li>
       <li><a href="game.php">Game</a></li>
       <li><a href="apps.php">Apps</a></li>
       <li><a href="tips.php">Tips & Trick</a></li>
       <li style="float:right;"><a href="logout.php" onclick="return confirm('Apakah Anda Yakin ?');">LOG-OUT</a></li>
     </ul>
   </div>
<div class="konten">
  <div class="form-input">
    <form class="form" action="proses_artikel.php" method="post">
      Judul : <br> <br> <input type="text" name="Judul" value="" style="width:400px; height:25px;"> <br> <br>
      Type Artikel : <br> <br> <input type="radio" name="Type" value="Game">Game <br>
      <input type="radio" name="Type" value="Apps">Apps <br>
      <input type="radio" name="Type" value="Gadget">Gadget <br>
      <input type="radio" name="Type" value="Tips">Tips & Trick<br>
      <input type="radio" name="Type" value="Medsos">Media Sosial <br> <br>
      Isi : <br> <textarea name="Isi" rows="20" cols="80" style="resize : vertical;"></textarea>
      <br> <input type="submit" name="submit" value="Submit Artikel" style="width : 200px; height: 70px; border:none; background-color: rgb(30, 100, 150); color: white;">
    </form>
  </div>
 </div>
  </body>
   </html>
