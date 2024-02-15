<?php
require "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $insertID = $_POST["hari"];
    $insertUser = $_POST["jadwal1"];
    $insertDate = $_POST["jadwal2"];
    $insertSparePart = $_POST["jadwal3"];

    $query = "INSERT INTO jadwalhari VALUES ('$insertID', '$insertUser', '$insertDate',
    '$insertSparePart')";

    if ($conn->query($query) === TRUE) {
        echo "Berhasil Tambah Jadwal";
        header('Location: ../../tabelhasilform.php');
    } else {
        echo "Gagal Tambah Jadwal. Error: " . $query . "<br>" . $conn->error;
    }
}

$conn->close();
?>