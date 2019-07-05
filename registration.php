<?php
  header('Content-Type: text/html; charset=utf-8');

  $server = "localhost"; /* имя хоста (уточняется у провайдера), если работаем на локальном сервере, то указываем localhost */
  $username = "root"; /* Имя пользователя БД */
  $password = ""; /* Пароль пользователя, если у пользователя нет пароля то, оставляем пустым */
  $database = "iexpert"; /* Имя базы данных, которую создали */

  // Подключение к базе данный через MySQLi
  $mysqli = new mysqli($server, $username, $password, $database);

  // Проверяем, успешность соединения.
  if (mysqli_connect_errno()) {
    echo "<p><strong>Ошибка подключения к БД</strong>. Описание ошибки: ".mysqli_connect_error()."</p>";
    exit();
  }
  // Устанавливаем кодировку подключения
  $mysqli->set_charset('utf8');

  session_start();
  if (isset($_POST['popsurname'])) { $popsurname = $_POST['popsurname'];}
  if (isset($_POST['popname'])) { $popname = $_POST['popname']; }
  if (isset($_POST['popmiddlename'])) { $popmiddlename = $_POST['popmiddlename']; }
  if (isset($_POST['popmail'])) { $popmail = $_POST['popmail']; }
  if (isset($_POST['poptel'])) { $poptel = $_POST['poptel']; }
  if (isset($_POST['poppas'])) { $poppas = $_POST['poppas']; }

  switch ($_POST["type"]) {
    case 'registr':
      if (!empty($popsurname) && !empty($popname) && !empty($popmiddlename) && !empty($popmail) && !empty($poptel)&& !empty($poppas)){
        //Убираем теги и исключаем работу скриптов
        $popsurname = stripslashes($popsurname);
        $popsurname = htmlspecialchars($popsurname);
        $popname = stripslashes($popname);
        $popname = htmlspecialchars($popname);
        $popmiddlename = stripslashes($popmiddlename);
        $popmiddlename = htmlspecialchars($popmiddlename);
        $popmail = stripslashes($popmail);
        $popmail = htmlspecialchars($popmail);
        $poptel = stripslashes($poptel);
        $poptel = htmlspecialchars($poptel);
        $poppas = stripslashes($poppas);
        $poppas = htmlspecialchars($poppas);
        //Убираем лишние пробелы
        $popsurname = trim($popsurname);
        $popname = trim($popname);
        $popmiddlename = trim($popmiddlename);
        $popmail = trim($popmail);
        $poptel = trim($poptel);
        $poppas = trim($poppas);
        //Проверяем наличие такой почты в базе
        $status = mysqli_query($mysqli, "SELECT `email` FROM `user` WHERE `email`='$popmail'");

        if ($status->num_rows!=0) {
          exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
        }
        else{
          //Добавляем аккаунт в базу
          $query = mysqli_query($mysqli, "INSERT INTO `user` VALUES('null','$popsurname', '$popname', '$popmiddlename','$popmail','$poppas','$poptel',125)");
          if($query){
            $message = "Аккаунт создан";
          } else {
            $message = "Произошла ошибка";
          }
        }

        $result = array(
          'popsurname' => $popsurname,
          'name' => $popname,
          'popmiddlename' => $popmiddlename,
          'email' => $popmail,
          'tel' => $poptel,
          'password' => $poppas
          //'message' => $message
        );
        echo json_encode($result);
        break;
      }
      else {
        echo json_encode("Форма не заполнена");
        exit();
        break;
      }
    case 'signin':
      if (isset($_POST['popnamein'])) { $popnamein = $_POST['popnamein']; }
      if (isset($_POST['poppasin'])) { $poppasin=$_POST['poppasin']; }
      if (empty($popnamein) or empty($poppasin)){
        exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
      }
      //проверка, чтобы теги и скрипты не работали
      $popnamein = stripslashes($popnamein);
      $popnamein = htmlspecialchars($popnamein);
      $poppasin = stripslashes($poppasin);
      $poppasin = htmlspecialchars($poppasin);
      //удаляем лишние пробелы
      $popnamein = trim($popnamein);
      $poppasin = trim($poppasin);

      $query = mysqli_query($mysqli, "SELECT * FROM `user` WHERE `email`='$popnamein'");
      foreach($query as $value){
        $array[] = $value;
      }
      if ($query->num_rows==0){
        exit ("Извините, введённый вами login или пароль неверный.");
      }
      else {
        if ($array[0]["password"]==$poppasin) {
          $_SESSION['email'] = $popnamein;
          $_SESSION['password'] = $poppasin;
          $_SESSION['id']=$array[0]["id"];
        }
        else {
          //если пароли не сошлись
          exit ("Извините, введённый вами login или пароль неверный.");
        }
      }
      echo json_encode('');
      break;
    case 'exit':
      unset($_SESSION["email"]);
      unset($_SESSION["password"]);
      unset($_SESSION['id']);
      session_destroy();
      break;
    case 'profile':
      if ($_SESSION!=null){
        $email = $_SESSION["email"];
        $query = mysqli_query($mysqli, "SELECT * FROM `user` WHERE `email`='$email'");
        foreach($query as $value){
          $array[] = $value;
        }
        $result = array(
          'id' => $array[0]["id"],
          'popsurname' => $array[0]["surname"],
          'name' => $array[0]["name"],
          'popmiddlename' => $array[0]["middlename"],
          'balance' => $array[0]["balance"]
        );
        echo json_encode($result);
      }
      else{
        echo json_encode('');
      }
      break;
    default:
      // code...
      break;
  }

?>
