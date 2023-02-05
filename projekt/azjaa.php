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
    
   <script>
      
       function progress(){
        var canvas = document.getElementById("canvas")
           var ctx = canvas.getContext('2d');
           var i=0
          var inter = setInterval(function(){  
            var canvas = document.getElementById("canvas")
           var ctx = canvas.getContext('2d');
           ctx.fillStyle='#0000FF'
           ctx.fillRect(0,0,i,ctx.canvas.height)
            i++
            if(i == ctx.canvas.width)
            {
                clearInterval(inter)
            }
           }, 5);
   

       }
   </script> 
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
      <li><a href="insert.php">Europa</a></li>
      <li class="active"><a href="#">Azja</a></li>
      <li><a href="afrykaa.php">Afryka</a></li>
      <li><a href="amerykana.php">Ameryka Płn</a></li>
      <li><a href="amerykasa.php">Ameryka Płd</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>Wyloguj się</a></li>
    </ul>
  </div>
</nav>
        </div>

<?php
session_start();
if(!isset($_SESSION['zalogowany']))
{
    header("location:login.php");

}

$conn = mysqli_connect('localhost', 'phpszarek', 'mylzUu2H8msql', 'phpszarek');

if (!$conn) {
die('Błąd połączenia: '.mysqli_connect_error());
exit;}

if (isset($_POST["send"]))
{   
    $plik = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];   
    $folder = "image/".$plik;
    $art = $_POST["art"];
    $tyt = $_POST["title"];
 

    $zapytanie = "insert into azja(tytul, tekst, plik) values('$tyt','$art','$plik')";
    $wynik=mysqli_query($conn, $zapytanie);
    if (move_uploaded_file($tempname, $folder))  {
        $msg = "Zdjęcie zostało dodane";
    }else{
        $msg = "Failed to upload image";
  }
    //echo "<br>";
    if($wynik)
    {
        echo "Artykuł został dodany";
    }else{
        echo "Błąd zapytania: ".mysqli_error($conn);
    }
}else{
    
}


if (isset($_POST["update"]))
{
    $id=$_POST["id"];
    $art = $_POST["art"];
    $tyt = $_POST["title"];
 

    $zapytanie = "update azja set tytul='$tyt', tekst='$art' where id=$id";
    $wynik=mysqli_query($conn, $zapytanie);
    //echo "<br>";
    if($wynik)
    {
        echo "Artykuł został zmodyfikowany";
    }else{
        echo "Błąd zapytania: ".mysqli_error($conn);
    }
}else{
   
}



if (isset($_POST["delete"]))
{
    $id=$_POST["id"];
   
 

    $zapytanie = "delete from azja where id=$id";
    $wynik=mysqli_query($conn, $zapytanie);
    //echo "<br>";
    if($wynik)
    {
        echo "Artykuł został usunięty";
    }else{
        echo "Błąd zapytania: ".mysqli_error($conn);
    }
}else{
 
}

// $sql = "select * from europa;"; //zdefiniowanie zabytania w SQL, np. insert, select, describe...
// $result = mysqli_query($conn, $sql); //wysłanie zapytania do bazy
// if($result) {echo "<br>";
// } else {
//   echo "Błąd zapytania: " . mysqli_error($conn);
// }

//wyświetlenie wyników--------------------------------------------------
// w zapytaniu select można pobrać wyniki


// show--------------------------------
// if (mysqli_num_rows($result) > 0) {
//     echo '<br>';
  

// while ($row=mysqli_fetch_assoc($result)){
//     echo '<tr style="border: 1px solid black;">';

// echo '<p>'.$row['tekst'].'</p';


// }
// } else echo "Nie znaleziono rekordów";

//------------------


mysqli_close($conn);
?>
<?php

//  include('xxx.php');

$conn = mysqli_connect('localhost', 'phpszarek', 'mylzUu2H8msql', 'phpszarek');
if (!$conn) {
  die('Błąd połączenia: '.mysqli_connect_error());
  exit;}

  $sql="SELECT * FROM azja; ";
  $wykonaj=mysqli_query($conn, $sql);


  // <form method="post" action="ddd.php">
  // <textarea name="wpis1">$zmiennazbazy</textarea>
  // <input type="submit" value="">

//  echo "";

  while($x=mysqli_fetch_assoc($wykonaj))
  {
      echo "<div class='kontener'><form method='post' action='azjaa.php'><input type='text' name='title' value='".$x['tytul']."'> <input name='id' type='hidden' value='".$x['id']."' /><div class='area'><textarea rows='10' cols='200' name='art'>".$x['tekst']."</textarea></div>
      <input type='submit' name='update' value='Popraw'> <input type='submit' name='delete' value='Usuń'></form></div>";
      
   
      
  }


  mysqli_close($conn);

?>
<div class="kontener">
<form method='post' action='azjaa.php'  enctype='multipart/form-data'><input type="text" placeholder="Tytuł artykułu" name="title"><div class="area"><textarea rows='10' cols='200' name='art' required></textarea></div>
<input type="file" name="uploadfile" value="" onChange="progress()"/>
<canvas id="canvas" style="width:10%;border:1px solid black;border-radius:5px;height:10px;"></canvas>
      <input type='submit' name='send' value='Dodaj' id="animacja">
    
 
    </form>
    </div>
    <footer class="page-footer font-small blue">

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2021 Krzysztof Szarek
 
</div>
<!-- Copyright -->

</footer>
</body>
</html>




