<?php
/*setcookie('login', 'Vasya123', time() + 864000);*/
// добавил для примера при использовании Git
if (isset($_COOKIE['counter'])){
    $counter = ++$_COOKIE['counter'];
}
    else {
        $counter = 1;
    }
setcookie('counter', $counter, time() + 86400);
?>
Посещений: <?php echo $counter; ?>
<!DOCTYPE html>
<html>
    <head>
<title>  Сайт </title>
<meta charset="utf-8">
<meta name="PROBA">
<meta http-equiv="Content-Type" content="text/html">
    </head>
<body>    
<h1>АВТОРИЗАЦИЯ</h1>
<form action="/i/reg.php" method="POST">
Введите Ваше имя :
   <input type="text" name="login">
и пароль:
   <input type="password" name="pass">
Запомнить меня

<select type="text" name="save">
            <option value="yes"> yes </option>
            <option value="no"> no </option>
   
        </select>
<input type="submit">
</form>

<br>
<?php echo "Текущее время:" . time();  
?>
<br>
<?php
//var_dump($_COOKIE);

/*if (isset($_COOKIE['login'])){
    echo "Я установил тебе КУКИ:";
    echo $_COOKIE['login']; 
    echo ", ";
    echo $_COOKIE['counter'];    

}
    else {
    echo "скоро поставлю тебе КУКУ";    
    }
*/
?>
</body>
</html>
