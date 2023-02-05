<?php


session_start();
if(isset($_SESSION['zalogowany'])&& $_SESSION['zalogowany']=true)
{
  header('location:insert.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script src="script.js"></script>
	<title>Strona Główna</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/0.css">
	<link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 

</head>
<body>
    <div style="min-height:97vh">

        <div id="pojemnik">   
            <div id="baner">
            <h1 id="ttt">Blog Podróżniczy</h1>
                <div class="slideshow-container">

                    
                    <div class="fade" style="display: block">
                      <div class="numbertext">1 / 3</div>
                      <img src="img1.jpg" style="margin-top: 1%;" alt="img1">
                  <!--    <div class="text">tekst</div> -->
                    </div>
                  
                    <div class="fade" style="display: none">
                      <div class="numbertext">2 / 3</div>
                      <img src="img2.jpg" style="margin-top: 1%;" alt="img2">
                    </div>
                  
                    <div class="fade" style="display: none">
                      <div class="numbertext">3 / 3</div>
                      <img src="img3.jpg" style="margin-top: 1%;" alt="img3">
                    </div>
                  
                    <a class="prev" onclick="slide(0)">&#10094;</a>
                    <a class="next" onclick="slide(1)">&#10095;</a>
                  </div>
                  <br>
           


            </div>    
            <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Kontynent:</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Europa</a></li>
      <li><a href="#">Azja</a></li>
      <li><a href="#">Afryka</a></li>
      <li><a href="#">Ameryka Płn</a></li>
      <li><a href="#">Ameryka Płd</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span>Rejestracja</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span>Logowanie</a></li>
    </ul>
  </div>
</nav>
        </div>

        <div class="row justify-content-center" style="margin-left:30%;margin-right:30%;">
<form action="login.php" method="post">
     

  <div class="form-group">
        <label for="przykladowyLogin">Login</label>
        <input type="text" class="form-control" name="login" placeholder="Wpisz Login">
        <small id="podpowiedzEmail" class="form-text text-muted">W powyższym polu wpisujesz swój login.</small>
      </div>
  <div class="form-group">
    <label for="przykladoweHaslo">Hasło</label>
    <input type="password" class="form-control" name="haslo" placeholder="Wpisz hasło">
  </div>

  <input type="submit" class="btn btn-primary" name="send" value="Zaloguj się">
 
  
</form>
</div>
    </div>
<footer class="page-footer font-small blue min-vh-100">

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2021 Krzysztof Szarek
 
</div>
<!-- Copyright -->

</footer>
</body>
</html>