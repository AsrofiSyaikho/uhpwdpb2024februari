<?php
require "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $insertID = $_POST["hari"];
    $insertNokeluhan = $_POST["jadwal1"];
    $insertUser = $_POST["jadwal2"];
    $insertDate = $_POST["jadwal3"];

    $query = "UPDATE jadwalhari SET jadwal1 = '$insertNokeluhan', jadwal2 = '$insertUser',
    jadwal3 = '$insertDate' WHERE hari = '$insertID'";

    if ($conn->query($query) === TRUE) {
        echo "Berhasil Ubah Jadwal";
        header('Location: ../../tabelhasilform.php');
    } else {
        echo "Gagal Ubah Jadwal. Error: " . $query . "<br>" . $conn->error;
    }
}

$conn->close();
?>