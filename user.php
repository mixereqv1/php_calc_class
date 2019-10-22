<?php
    include_once('db.php');
    class user extends db {
        function getAllUsers() {
            $sql = "SELECT * FROM pracownicy";
            $result = $this->connect()->query($sql);
            // echo '<table>';
            // while($row = $result->fetch_assoc()) {
            //     echo '<tr>';
            //     echo '<td>'.$row['imie'].'</td><td>'.$row['dzial'].'</td>';
            //     echo '</tr>';
            // }
            // echo '</table>';
            // $numRows = $result->num_rows;
            // echo $numRows;

            while($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }  
    }
?>