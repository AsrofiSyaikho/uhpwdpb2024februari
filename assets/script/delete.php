<?php
require "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $insertNokeluhan = $_POST["hari"];

    $query = "DELETE FROM `jadwalhari` WHERE `jadwalhari`.`hari` = '$insertNokeluhan'";

    if ($conn->query($query) === TRUE) {
        echo "Berhasil Hapus Jadwal";
        header('Location: ../../tabelhasilform.php');
    } else {
        echo "Gagal Hapus Jadwal. Error: " . $query . "<br>" . $conn->error;
    }
}

$conn->close();
?>