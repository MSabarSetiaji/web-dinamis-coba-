<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <style media="screen">
.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: linear-gradient(-90deg, aqua, rgb(255, 255, 0));
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: grey;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: black;
}
.form .message {
  margin: 15px 0 0;
  color: White;
  font-size: 12px;
}
.form .message a {
  color: grey;
  text-decoration: none;
}
.form .register-form {
  display: none;
}

  body{
        background: linear-gradient(-90deg, aqua, rgb(255, 255, 0));
      }
</style>
  <body>
    <div class="login-page">
      <div class="form">
        <form class="login-form" action="proses_login.php" method="post">
          <input type="text" required name="Nama" value="" autocomplete="off" placeholder="Nama" autofocus>
          <input type="Password" required name="Password" value="" autocomplete="off" placeholder="Password">
          <button type="submit" name="button">Masuk</button>
          <p class="message">Belum Punya Akun? <a href="daftar.php">Buat Akun</a></p>
        </form>
      </div>
    </div>
  </body>
</html>
