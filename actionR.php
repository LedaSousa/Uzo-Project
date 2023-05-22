<?php
session_start();

if (!isset($_POST['btn_submit'])) {


    include 'config.php';
    $connect = new PDO("mysql:dbname=$database;host=$host", $user, $password);

    $tel = hash('sha256', $_POST['usrname']);
    $tel2 = $_POST['usrname'];

    $email = "";
    $email = hash('sha256', $_POST['email']);
    $pass = hash('sha256', $_POST['psw']);

    // numero existente
    $sql = "SELECT Phone_number FROM Users WHERE Phone_number = '" .  $tel . "'";
    


    $motor = $connect->prepare($sql);
    $motor->execute();

    $connect = null;

    $criptpass = "";
    foreach ($motor as $post) {

        $criptpass = $post['Phone_number'];
    }

    date_default_timezone_set("Europe/Lisbon");
    $datenow = date("Y-m-d H:i:s");


    if ($criptpass != "") {
        // Tentativa de Bruteforce ?!?!
        include 'config.php';
        $connect3 = new PDO("mysql:dbname=$database;host=$host", $user, $password);
        $sql3 = "INSERT INTO `UsersLogin` VALUES (null,'" .  $tel . "', '" .  $datenow . "','Tentativa de Novo Registo');";


        $motor3 = $connect3->prepare($sql3);
        $motor3->execute();

        $connect3 = null;
        header("Location: login.php?erro=2");
    } else {
        // Login Bem sucedido
        include 'config.php';
        $connect = new PDO("mysql:dbname=$database;host=$host", $user, $password);

        $sql =  "INSERT INTO `Users` VALUES (null,'" .  $tel . "','" . $email . "','" .  $pass . "');";
        $sql2 = "INSERT INTO `UsersLogin` VALUES (null,'" .  $tel . "', '" .  $datenow . "','Novo Login');";

        $motor = $connect->prepare($sql);
        $motor->execute();

        $motor2 = $connect->prepare($sql2);
        $motor2->execute();

        $connect = null;

        $_SESSION["my_uzo"] = $tel2;

        header("location:index.php");
    }
}
