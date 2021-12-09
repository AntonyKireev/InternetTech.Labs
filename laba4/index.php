<?php ob_clean(); session_start(); ?>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Логин</title>
    <style>
        .login{
            background-color: whitesmoke;
            text-align: center;
            width: 25em;
            opacity: 97%;
            position: absolute;
            top: 50%;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, -50%);
            border-radius: 10%;
        }
    </style>
</head>
<body>
    <div class="login">
        <p style="font-size: 50px; font-weight: bold;">Вход</p>
        <form action="Script.php" method="post">
            <p><input id="email" type="email" placeholder="Напишите E-mail" name="username"></p>
            <p><input id="password" type="password" placeholder="Напишите пароль" name="userpass"></p>
            <p><input id="apply" type="submit" value="Войти"></p>
        </form>
      <?php
      if(!isset($_SESSION['validation'])){
          echo "<p>Введите логин и пароль</p>";
      } else {
          switch ($_SESSION['validation']) {
              case "correct":
                  $_SESSION['validation'] = "noReqests";
                  echo "<p style='color: darkgreen'>Добро пожаловать!</p>";
                  session_destroy();
                  break;
              case "noReqests":
                  $_SESSION['validation'] = "noReqests";
                  echo "<p style='color: darkred'>Неверный логин или пароль</p>";
                  session_destroy();
                  break;
              case "incorrect":
                  $_SESSION['validation'] = "noReqests";
                  echo "<p style='color: darkred'>Неверный логин или пароль</p>";
                  session_destroy();
                  break;
          }
      }
      ?>
    </div>
</body>
</html>
