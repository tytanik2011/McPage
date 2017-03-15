<?php
    require_once('config.php');
    $array = json_decode(file_get_contents("https://mcapi.ca/query/" . $serverIp . ":" . $serverPort . "/info"), true);
    if($array['status'] == true){
        $status = $array['status'];
        $ip = $array['hostname'];
        $online = $array['players']['online'];
        $max = $array['players']['max'];
    }else{
        $status = $array['status'];
    }

?>