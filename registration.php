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

  if (isset($_POST['exp_surname'])) { $exp_surname = $_POST['exp_surname']; }
  if (isset($_POST['exp_name'])) { $exp_name = $_POST['exp_name']; }
  if (isset($_POST['exp_middlename'])) { $exp_middlename = $_POST['exp_middlename']; }
  if (isset($_POST['exp_mail'])) { $exp_mail = $_POST['exp_mail']; }
  if (isset($_POST['exp_phone'])) { $exp_phone = $_POST['exp_phone']; }
  if (isset($_POST['expcategory'])) { $expcategory = $_POST['expcategory']; }
  if (isset($_POST['exp_pas'])) { $exp_pas = $_POST['exp_pas']; }

  if (isset($_POST['id_exp'])) { $id_exp = $_POST['id_exp']; }
  if (isset($_POST['id_user'])) { $id_user = $_POST['id_user']; }


  switch ($_POST["type"]) {
    //Регистрация
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
    //Вход в аккаунт
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
      $queryexp = mysqli_query($mysqli, "SELECT * FROM `expert` WHERE `email`='$popnamein'");
      foreach($query as $value){
        $array[] = $value;
      }
      foreach ($queryexp as $value) {
        $array[] = $value;
      }
      if (($query->num_rows==0) && ($queryexp->num_rows==0)){
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
    //Выход из аккаунта
    case 'exit':
      unset($_SESSION["email"]);
      unset($_SESSION["password"]);
      unset($_SESSION['id']);
      session_destroy();
      break;
    //Регистрация эксперта
    case 'registr_exp':
      if (!empty($exp_surname) && !empty($exp_name) && !empty($exp_middlename) && !empty($exp_mail) && !empty($exp_phone)&& !empty($expcategory)&& !empty($exp_pas)){
        //Убираем теги и исключаем работу скриптов
        $exp_surname = stripslashes($exp_surname);
        $exp_surname = htmlspecialchars($exp_surname);
        $exp_name = stripslashes($exp_name);
        $exp_name = htmlspecialchars($exp_name);
        $exp_middlename = stripslashes($exp_middlename);
        $exp_middlename = htmlspecialchars($exp_middlename);
        $exp_mail = stripslashes($exp_mail);
        $exp_mail = htmlspecialchars($exp_mail);
        $exp_phone = stripslashes($exp_phone);
        $exp_phone = htmlspecialchars($exp_phone);
        $expcategory = stripslashes($expcategory);
        $expcategory = htmlspecialchars($expcategory);
        $exp_pas = stripslashes($exp_pas);
        $exp_pas = htmlspecialchars($exp_pas);
        //Убираем лишние пробелы
        $exp_surname = trim($exp_surname);
        $exp_name = trim($exp_name);
        $exp_middlename = trim($exp_middlename);
        $exp_mail = trim($exp_mail);
        $exp_phone = trim($exp_phone);
        $expcategory = trim($expcategory);
        $exp_pas = trim($exp_pas);
        //Проверяем наличие такой почты в базе
        $status = mysqli_query($mysqli, "SELECT `email` FROM `expert` WHERE `email`='$exp_mail'");
        if ($status->num_rows!=0) {
          exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
        }
        else{
          //Добавляем аккаунт в базу
          $query = mysqli_query($mysqli, "INSERT INTO `expert` VALUES('null','$expcategory', '$exp_surname', '$exp_name', '$exp_middlename','$exp_mail','$exp_pas','$exp_phone')");
          if($query){
            $message = "Аккаунт создан";
          } else {
            $message = "Error";
          }
        }

        $result = array(
          'popsurname' => $exp_surname,
          'name' => $exp_name,
          'popmiddlename' => $exp_middlename,
          'email' => $exp_mail,
          'tel' => $exp_phone,
          'category' => $expcategory,
          'password' => $exp_pas,
          'message' => $message
        );
        echo json_encode($result);
        break;
      }
      else {
        echo json_encode("Форма не заполнена");
        exit();
        break;
      }
    //Запрос данных профиля
    case 'profile':
      if ($_SESSION!=null){
        $email = $_SESSION["email"];
        $query = mysqli_query($mysqli, "SELECT * FROM `user` WHERE `email`='$email'");
        $queryexp = mysqli_query($mysqli, "SELECT * FROM `expert` WHERE `email`='$email'");
        foreach($query as $value){
          $array[] = $value;
        }
        foreach($queryexp as $value){
          $array[] = $value;
        }
        if ($query->num_rows!=0){
          $result = array(
            'id' => $array[0]["id"],
            'popsurname' => $array[0]["surname"],
            'name' => $array[0]["name"],
            'popmiddlename' => $array[0]["middlename"],
            'balance' => $array[0]["balance"],
            'type' => 'user'
          );
        }
        if ($queryexp->num_rows!=0){
          $result = array(
            'id' => $array[0]["id_ex"],
            'popsurname' => $array[0]["surname"],
            'name' => $array[0]["name"],
            'popmiddlename' => $array[0]["middle_name"],
            'type' => 'exp'
          );
        }
        echo json_encode($result);
      }
      else{
        echo json_encode('');
      }
      break;
    case 'chat':
      $status = mysqli_query($mysqli, "SELECT * FROM `chats` WHERE `id_ex`='$id_exp' and `id`='$id_user'");
      //var_dump($status);
      if ($status->num_rows==0) {
        $newchat = mysqli_query($mysqli, "INSERT INTO `chats` VALUES('null','$id_exp', '$id_user', 1)");
      }
      else {
        foreach ($status as $value) {
          $array[] = $value;
        }
        $id_chats =  $array[0]["id_chat"];
        $messages = mysqli_query($mysqli, "SELECT * FROM `message` WHERE `id_chats`='$id_chats'");
        if ($messages->num_rows!=0){
          foreach ($messages as $value) {
            $message[] = $value;
          }
          echo json_encode($message);
          break;
        }
      }
    break;
    default:
      // code...
      break;
  }

?>
