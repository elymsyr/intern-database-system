<?php
$admin_id = 0;
$admin_pass = 0;
$servername = "localhost";
$username = "root";
$password = "aqwer1234";
$dbname = "staj";
$path = '../ini.json';

function db_connect(){
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
}

function log_in ($get_nick, $get_pass){
    //check if nick and password in the stj_kullanici table
    //if in, continue and take the kull_kod as $current_user = $kull_kod;
    $link = "<script>window.open('http://localhost/intern-database-system/html/menu.php', '_self')</script>";
    echo $link;
}

function get_ini() {
    global $path;
    $json = file_get_contents($path);
    $ini = json_decode($json, true);
    $user_id = ($ini["user_id"]);
    $administiration = ($ini["administiration"]);
    $ini = array($user_id, $administiration);
    return $ini;
}

function write_ini($get_nick, $get_pass, $admin_id, $admin_pass){
    if ($get_nick == $admin_id and $get_pass == $admin_pass){
        $ini = [
            "user_id" => $get_nick,
            "administiration" => 1
        ];
    }
    else {
        $ini = [
            "user_id" => $get_nick,
            "administiration" => 0
        ];
    }
    $ini = json_encode($ini, JSON_PRETTY_PRINT);
    $fp = fopen('ini.json', 'w');
    fwrite($fp, $ini);
    fclose($fp);
}

?>