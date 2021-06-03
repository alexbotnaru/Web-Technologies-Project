<?php
include("connection.php");

session_start();

function check_login($con)
{
    if (isset($_SESSION['user_id'])) {
        $id = $_SESSION['user_id'];
        $query = "SELECT * FROM users WHERE user_id = '$id' LIMIT 1";

        $result = mysqli_query($con, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    //redirect to login
    header("Location: login.php");
    die;
}


//DELETE
if (isset($_GET['delete'])) {
    $message_id = $_GET['delete'];
    $query = "DELETE FROM messages WHERE message_id = '$message_id' ";
    if (mysqli_query($con, $query) == false) {
        die("Nu s-a putut sterge inegistrarea!");
    };

    $_SESSION['message'] = "Inregistrarea a fost stearsa!";
    $_SESSION['msg_type'] = "danger";

    header("location: messages.php");
}

//UPDATE
if (isset($_POST['update'])) {
    $message_id = $_POST['message_id'];
    $nume = $_POST['nume'];
    $subiect = $_POST['subiect'];
    $nr_tel = $_POST['nr_tel'];
    $email = $_POST['email'];
    $mesaj = $_POST['mesaj'];

    $query = "UPDATE messages SET 
    nume='$nume', subiect='$subiect', nr_tel='$nr_tel', email='$email', mesaj='$mesaj' WHERE message_id='$message_id' ";
    mysqli_query($con, $query);

    $_SESSION['message'] = "Inregistrarea a fost modificata!";
    $_SESSION['msg_type'] = "warning";

    header('location: messages.php');
}

//EXPORT
if (isset($_POST['export'])) {
    $query = "SELECT * FROM messages";
    $result = mysqli_query($con, $query);
    $data_arr = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $data_arr[] = $row;
    }
    $file = fopen('messages.txt', 'w');
    $json_data = json_encode($data_arr, JSON_PRETTY_PRINT);
    fwrite($file, $json_data);
    fclose($file);

    $_SESSION['message'] = "Datele au fost inregistrate in file-ul messages.txt!";
    $_SESSION['msg_type'] = "success";
}
