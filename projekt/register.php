<?php
//połączenie z bazą danych- najwygodniej wstawić za pomocą require("plik.php");


$conn = mysqli_connect('localhost', 'phpszarek', 'mylzUu2H8msql', 'phpszarek');
//$conn = mysqli_connect('localhost', 'a.kowalska', 'myhaslosql ', 'a.kowalska');

if (!$conn) {
echo('Nie można połączyć z bazą danych'.mysqli_connect_error());
exit;}

//wysłanie zapytania--------------------------------------------
//$sql = "select * from user;"; //zdefiniowanie zabytania w SQL, np. insert, select, describe...
//$result = mysqli_query($conn, $sql); //wysłanie zapytania do bazy
//if($result) {echo "Zapytanie wysłane poprawnie";
//} else {
 // echo "Błąd zapytania: " . mysqli_error($conn);
//}

//wyświetlenie wyników--------------------------------------------------
// w zapytaniu select można pobrać wyniki

if (isset($_POST["send"]))
{
    $login = $_POST["login"];
    $email = $_POST["email"];
    $haslo = $_POST["haslo"];

    $login=$_POST["login"];
    $zm_wynik=" SELECT login FROM user WHERE login ='$login' ";
    $zm = mysqli_query($conn, $zm_wynik);
    
    if (mysqli_num_rows($zm)== 0)
    {//wysyłamy do bazy zapytanie insert into...
    //jeśli zapytanie wysłane zostało poprawnie

    $zapytanie = "insert into user(login,email,haslo) values('$login', '$email', '$haslo')";
    $wynik=mysqli_query($conn, $zapytanie);
    //echo "<br>";
    if($wynik)
    {
        echo "zapytanie insert poprawne";
    }else{
        echo "Błąd zapytania: ".mysqli_error($conn);
    }

    echo "Konto zostało utworzone!";
    
    header("Location: index.php"); 
exit();
    }
    else echo "Podany login jest już zajęty.";




}else{
    echo "Błąd!!!";
}



mysqli_close($conn);
?>  