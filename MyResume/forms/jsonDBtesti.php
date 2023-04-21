<?php
include 'connection.php';
if ($result->num_rows > 0) {
            $response = array();
            while ($row = $result->fetch_assoc()) {
                $dt['name'] = $row["name"];
                $dt['email'] = $row["email"];
                $dt['message'] = $row["message"];
        
                array_push($response, $dt);
            }
            json_encode($response);
            $hasil_json = json_encode($response);
            }
            $conn ->close();

?>