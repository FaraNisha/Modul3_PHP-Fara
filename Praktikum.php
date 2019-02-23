<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
  </head>
  <style media="screen">
    *{
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
  body{
    padding: 0;
    margin: 0;
    background-image: url("YNWA.jpg");
    background-size: cover;
    background-repeat: no-repeat;
  }
  .login-wrap {
    position: absolute;
    margin: 0 auto;
    background-image: url("LY.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    top: 50%;
    left: 50%;
    width: 350px;
    border-radius: 15px;
    box-shadow: 3px 3px 10px #333;
    padding: 15px;
    transform: translateX(-50%)translateY(-50%);
  }
.box .label {
  display: block;
  font-family: 'Ubuntu', sans-serif;
  font-size: 18px;
}
.box .text input{
  font-style: italic;
  font-size: 16px;
  padding: 5px;
  margin: 3px;
  display: block;
  background-color: pink;
}
.no-access{
  color:darkblue;
  margin:20px 0px 20px -57%;
  cursor:pointer;
}
.login-submit input[type="submit"] {
  height:30px;
  width:100px;
  background:#fff;
  border:1px solid #f2f2f2;
  border-radius:20px;
  color: black;
  text-transform:uppercase;
  font-family: 'Ubuntu', sans-serif;
  cursor:pointer;
}
@media screen and (max-height: 600px) {
	.box {
		margin-top: 0;
		top: 10px;
	}
}
  </style>
  <body>
    <div class="login-wrap">
      <h2 align="center" class="judul">LOGIN</h2>
<div class="box">
    <form action="hasil.php" method="post">
      <div class="label">
      <label for="">Email :</label>
      </div>
      <br>
      <div class="text">
      <input type="email" class="form-control" name="email"  placeholder="Masukkan Email">
      </div>
      <br>
      <br>
      <div class="label">
      <label for="">Password :</label>
      </div>
      <br>
      <div class="text">
      <input type="password" name="password" placeholder="Masukkan Password">
      </div>
      <br>
      <br>
      <div class="login-submit">
      <input type="submit" name="submit" value="Login">
    </div>
    <div class="no-access">
      <a href="#"><h4 align="center">Lupa Password ?</h4></a>
    </div>
    </div>
  </div>
    </form>
  </body>
</html>
