<?php
include "../includes/db_connect.php";
$errorUrl = "'Location:../Login.php?q=error' ";
session_start();
$userPassword = $userName = $message = "";

/* mysqli_real_escape_string() helps prevent sql injection */
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!empty($_POST['userName'])) {
        $userName = mysqli_real_escape_string($conn, $_POST['userName']);
    }
    if (!empty($_POST['password'])) {
        $userPassword = mysqli_real_escape_string($conn, $_POST['password']);
    }

    $sqlUserCheck = "SELECT `UserName`, `Password` , `Status` FROM `logintable` WHERE Username = '$userName'";
    $result = mysqli_query($conn, $sqlUserCheck);
    $rowCount = mysqli_num_rows($result);

    if ($rowCount < 1) {
        header($erroeUrl);
    } else if ($rowCount == 1) {
        while ($row = mysqli_fetch_assoc($result)) {
            $userPasswordInDB = $row['Password'];
            $_SESSION['pass'] = $userPasswordInDB;
            $_SESSION['passw'] = $userPassword;

            if ($userPassword == $userPasswordInDB) {
                $_SESSION['Username'] = $userName;
                $_SESSION['Status'] = $row['Status'];
                header("Location: ../Dashboard.php");
            } else {
                header('Location:../Login.php?q=error');
            }
            /*if (password_verify($userPassword, $userPasswordInDB)) {
                $_SESSION['Username'] = $userName;
                header("Location: ../Dashboard.html");
            } else {
                header($erroeUrl);
            }*/
        }
    } else {
        header($erroeUrl);
    }
}
