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
      <li><a href="index.php">Europa</a></li>
      <li><a href="azja.php">Azja</a></li>
      <li class="active"><a href="#">Afryka</a></li>
      <li><a href="amerykan.php">Ameryka Płn</a></li>
      <li><a href="amerykas.php">Ameryka Płd</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="login.php"><span class="glyphicon glyphicon-user"></span>Rejestracja</a></li>
      <li><a href="rejestracja.html"><span class="glyphicon glyphicon-log-in"></span>Logowanie</a></li>
    </ul>
  </div>
</nav>
        </div>


<?php

$conn = mysqli_connect('localhost', 'phpszarek', 'mylzUu2H8msql', 'phpszarek');

if (!$conn) {
die('Błąd połączenia: '.mysqli_connect_error());
exit;}


$sql = "select * from afryka;"; 
$result = mysqli_query($conn, $sql); //wysłanie zapytania do bazy
if($result) {echo "<br>";
} else {
  echo "Błąd zapytania: " . mysqli_error($conn);
}





if (mysqli_num_rows($result) > 0) {
    echo '<br>';
  

while ($row=mysqli_fetch_assoc($result)){

echo '<div class="wpis"><h1>'.$row['tytul'].'</h1><br><img class="obraz" alt="" src=image/'.$row['plik'].'><p class="pole">'.$row['tekst'].'</p></div>';
     

}
} else echo "Nie znaleziono rekordów";

mysqli_close($conn);
?>
<footer class="page-footer font-small blue">

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2021 Krzysztof Szarek
 
</div>
<!-- Copyright -->

</footer>
</body>
</html>