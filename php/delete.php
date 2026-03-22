<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../db/conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['client_id'];

    $sql = "DELETE FROM client_info WHERE client_id = $id";

    if (mysqli_query($conn, $sql)) {
        header("Location: viewrecords.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    header("Location: viewrecords.php");
    exit();
}