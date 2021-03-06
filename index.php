<!DOCTYPE html>
<html>
    <head>
        <style>
            @import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
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
  background: #97233F;
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
  background: #0D2B56;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  background: #0D2B56;
  font-family: "Roboto", sans-serif;      
}
        </style>
        <meta charset="utf-8">
        <meta http-equiv="refresh" content="30">
        <meta name="description" content="Um site de futebol americano">
        <meta name="keywords" content="HTML,CSS,JavaScript">
        <meta name="author" content="Gio, Otavio, Gabriel">
        <link rel="icon" type="image/png" href="http://files.softicons.com/download/toolbar-icons/fugue-16px-additional-icons-by-yusuke-kamiyamane/png/16x16/sport-football.png">
        <script>
            $('.message a').click(function(){
            $('form').animate({height: "toggle", opacity: "toggle"}, "slow");});
                var tx = new Array (
                "TOUCHDOWN !!!",
                "Welcome to the NFL :P");
                var txcount=2;
                var i=1;
                var wo=0;
                var ud=1;
                function animatetitle()
                                                {
                window.document.title=tx[wo].substr(0, i)+"_";
                if (ud==0) i--;
                if (ud==1) i++;
                if (i==-1) {ud=1;i=0;wo++;wo=wo%txcount;}
                if (i==tx[wo].length+10) {ud=0;i=tx[wo].length;}
                // if (window.document.title.length < 20 ) window.document.title=window.document.title+"-";
                // if (window.document.title.length == 20 ) window.document.title=window.document.title+"]";
                // if (window.document.title.length == 21 ) setTimeout("window.document.title='Animierte Seitentitel '; ",1000);
                parent.window.document.title=tx[wo].substr(0, i)+"_";
                setTimeout("animatetitle()",200);
                                                }
                animatetitle();
            // -->
        </script>
    </head>
    <body>
    <div class="login-page">
        <div class="form">
            <form action="teste.php" method="POST">
                <label for="nomeu">
                    <input placeholder="Nome de Usuário *" type="text" name="nomeu" id="nomeu" maxlength="16" required/></label>
                <label for="senha">
                    <input placeholder="Senha *" type="password" name="senha" id="senha" maxlength="8" required/></label>
                        <button type="submit" value="ENVIAR" name="submit">Login!</button>
                <p class="message">Ainda não é registrado? <a href="signup.php">Criar uma conta aqui!</a></p>
                <p class="message"><a href="admin.html">Admin login</a></p>
            </form>
        </div>
    </div>
    <center><img src="nfl.png" height="220" width="300" alt="Nfl"></center>
    </body>
</html>
