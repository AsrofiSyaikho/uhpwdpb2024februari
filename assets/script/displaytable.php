<?php
require "connect.php";

$query ="SELECT * FROM jadwalhari";
            $result = $conn->query($query);
            if($result->num_rows> 0){
                echo '<table >';
                echo '<thead><tr><th>Hari</th><th>Jadwal Pertama</th><th>Jadwal Kedua</th><th>Jadwal Ketiga</th>';
                echo '<tbody>';
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $row['hari'] . '</td>';
                    echo '<td>' . $row['jadwal1'] . '</td>';
                    echo '<td>' . $row['jadwal2'] . '</td>';
                    echo '<td>' . $row['jadwal3'] . '</td>';
                    echo '</tr>';
                }
                echo '</tbody></table>';
            } else {
                echo 'Tidak ada data.';
            }
            ?>
            </center>
            <style>
                table {
                    background-color: white;
                    padding: 20px;
                    margin-top: 20px;
                }
                th,td {
                    border: 1px solid #000;
                    padding: 5px;
                }
            </style>
            