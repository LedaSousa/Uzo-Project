<?php
session_start();

if (!isset($_POST['btn_submit'])) {


    include 'config.php';
    $connect = new PDO("mysql:dbname=$database;host=$host", $user, $password);
    $tel = hash('sha256', $_POST['usrname']);
    $tel2 = $_POST['usrname'];
    $pass = hash('sha256', $_POST['psw']);
    $sql = "SELECT PassW FROM Users WHERE Phone_number = '" .  $tel . "'";
    $motor = $connect->prepare($sql);
    $motor->execute();
    $connect = null;
    $criptpass = "";
    foreach ($motor as $post) {

        $criptpass = $post['PassW'];
    }


    date_default_timezone_set("Europe/Lisbon");
    $datenow = date("Y-m-d h:i:s");

    if ($criptpass == $pass) {
        // Login Bem sucedido
        include 'config.php';
        $connect = new PDO("mysql:dbname=$database;host=$host", $user, $password);

        $tel = hash('sha256', $_POST['usrname']);
        $pass = hash('sha256', $_POST['psw']);
        $sql = "INSERT INTO `UsersLogin` VALUES (null,'" .  $tel . "', '" .  $datenow . "','OK');";
        $motor = $connect->prepare($sql);
        $motor->execute();
        $connect = null;

        $_SESSION["my_uzo"] = $tel2;

        header("location:index.php");
    } else {
        // Login Mal sucedido
        include 'config.php';
        $connect = new PDO("mysql:dbname=$database;host=$host", $user, $password);

        $tel = hash('sha256', $_POST['usrname']);
        $pass = hash('sha256', $_POST['psw']);

        $sql = "INSERT INTO `UsersLogin` VALUES (null,'" .  $tel . "', '" .  $datenow . "','Falhou');";

        $motor = $connect->prepare($sql);
        $motor->execute();
        $connect = null;


        header("Location: login.php?erro=1");
    }
} else {
    echo ("FAIL");
}
