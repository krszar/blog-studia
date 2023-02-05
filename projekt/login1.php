<?php
session_start();
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

    $haslo = $_POST["haslo"];

   

        
    $zm_wynik="SELECT login, haslo FROM user WHERE login='$login' AND haslo='$haslo'";
    $zm = mysqli_query($conn, $zm_wynik);
    if (mysqli_num_rows($zm)>0)
    {
        echo "zalogowano";
        $_SESSION['zalogowany'] = true;
        header("Location: insert.php"); 
        exit();
    }else{
        echo "złe dane";
        header("Location: index.php"); 
    }

}else{
    echo "Błąd!!!";
}



mysqli_close($conn);
?>