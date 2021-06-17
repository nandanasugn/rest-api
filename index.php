<?php

include "connection.php";

if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    $qu = "select * from mahasiswa";
    $conn = mysqli_query($connection, $qu);

    while($data = mysqli_fetch_array($conn)){
        $datanya[] = array(
            'npm' => $data['npm'],
            'nama' => $data['nama'],
            'jurusan' => $data['jurusan'],
            'alamat' => $data['alamat']
        );
    }

    $respon[] = array(
        'status' => 'OK',
        'kode' => '999',
        'data' => $datanya
    );
    
    header("Content-type: application/json");
    echo json_encode($respon);
}
?>