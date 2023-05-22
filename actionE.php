<?php
session_start();

if (!isset($_POST['btn_submit'])) {


    include 'config.php';
    $connect = new PDO("mysql:dbname=$database;host=$host", $user, $password);

    $tel = hash('sha256', $_POST['usrname']);


    // numero existente
    $sql = "SELECT UserId,Phone_number FROM Users WHERE Phone_number = '" .  $tel . "'";
    $motor = $connect->prepare($sql);
    $motor->execute();

    $connect = null;

    $criptpass = "";
    foreach ($motor as $post) {

        $id = $post['UserId'];
        $criptpass = $post['Phone_number'];
    }

    date_default_timezone_set("Europe/Lisbon");
    $datenow = date("Y-m-d H:i:s");
    $novapass = hash('sha256', 'P@ssword1');


    if ($criptpass != "") {
        // Enviada nova Password
        include 'config.php';
        $connect = new PDO("mysql:dbname=$database;host=$host", $user, $password);


        $sql = "INSERT INTO `UsersLogin` VALUES (null,'" .  $tel . "', '" .  $datenow . "','Enviado nova password');";
        $sql2 =  "UPDATE `Users` SET PassW ='" .  $novapass . "' WHERE UserId=" . $id;


        $motor = $connect->prepare($sql);
        $motor2 = $connect->prepare($sql2);
        $motor->execute();
        $motor2->execute();

        $connect = null;

        header("Location: login.php?erro=4");
    } else {


        header("Location: login.php?erro=3");
    }
}