<?php
    $clientVersion = "0.1";
    $serverVersionPrepare = json_decode(file_get_contents("https://raw.githubusercontent.com/tytanik2011/McPage/0.1/core/version.json"), true);
    $serverVersion = $serverVersionPrepare['version'];
    if($clientVersion != $serverVersion){
        echo "<script>alert('Wersja strony jest nieaktualna!')";
        $returnedVersion = $clientVersion . " NIEAKTUALNA!";
    }else{
         $returnedVersion = $serverVersion;   
    }
?>