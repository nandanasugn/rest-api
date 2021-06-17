<?php

function getKey(){
    return ["1234", "rahasia", "xyz"];
}

function isValid(){
    $apikey = "1234";
    if (in_array($apikey, getKey())) {
        return true;
    } else{
        return false;
    }
}

function jsonOut($status, $message, $data){
    $respon = ["status" => $status, "message" => $message, "data" => $data];
    header("Content-type: application/json");
    echo json_encode($respon);
}

function getMahasiswa(){
    $mahasiswa = [
        ["nama" => "Nandana", "kontent" => "seorang publisher"]
    ];
    return $mahasiswa;
}

if(isValid($_GET)){
    jsonOut("success", "api key is valid", getMahasiswa());
} else {
    jsonOut("failed", "api key is not valid", null);
}

?>