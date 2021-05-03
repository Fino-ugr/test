<?php 
session_start(); // Стартует новую сессию, либо возобновляет существующую, 
                // но ВСЁ это только для конкретного пользователя!
                // размещается до любого вывода на экран


   $_SESSION['login'] = $_POST['login'];
   $_SESSION['pass'] = $_POST['pass'];
   $_SESSION['save'] = $_POST['save'];
$save = $_SESSION['save'];
if ($save == 'yes'){
    setcookie('user_save', $save, time() + 86400);
}
    
    if ($_SESSION['login'] == 'Василий'){
        if ($_SESSION['pass'] == 12345678){
            echo 'Вы успешно прошли авторизацию!';
            $new_url = 'http://localhost/i/i-osn.php';
            header('Location: '.$new_url);
        }    
        elseif ($_SESSION['pass'] != 12345678){
            echo 'Введен не верный пароль!';
        }
    }

    elseif ($_SESSION['login'] == 'Петр'){
        if ($_SESSION['pass'] == 'qwerty'){
            echo 'Вы успешно прошли авторизацию!';
            $new_url = 'http://localhost/i/i-osn.php';
            header('Location: '.$new_url);
        }
        elseif ($_SESSION['pass'] != 'qwerty'){
            echo 'Введен не верный пароль!';
    }      
    
    }
    else {
        echo 'Вы не авторизованы!';
    }
   // var_dump($_SESSION);
?>
<!DOCTYPE html>
<html>
    <head>
<title>  Сайт </title>
<meta charset="utf-8">
<meta name="PROBA">
<meta http-equiv="Content-Type" content="text/html">
    </head>
<body>    
     
ЭТО СКРИПТ РЕГИСТРАЦИИ
<?php //echo "Текущее время:" . time();  
?>
<br>
<?php
// var_dump($_COOKIE);
//var_dump($_SESSION);

?>
</body>
</html>
