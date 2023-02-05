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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
	<link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
        <div class="row justify-content-center">
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
</body>
</html>