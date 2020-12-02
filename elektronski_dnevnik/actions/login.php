<?php
include "connections.php";

$username = $mysqli->real_escape_string(strip_tags($_POST['username']));
$password = $mysqli->real_escape_string(strip_tags($_POST['password']));

$sql = "SELECT * FROM users WHERE username = '$username'";
$result = $mysqli->query($sql);

if($result->num_rows == 1) {
    $row = $result->fetch_assoc();

    if(password_verify($password, $row['password'])) {

        $_SESSION['loggedIn'] = TRUE;
        $_SESSION['username'] = $row['username'];
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['nastavnik'] = 0;

        if($row['nastavnik'] == "1") {
            $_SESSION['nastavnik'] = 1;
            header('location:../user/ucenik.php');

        } else {
            header('location:../user/profa.php');
        }




    }
    } else {
        header('location:../indexerror.html');
    }