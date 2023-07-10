<?php
require "functions.php";

$get_nick = $_POST["nick"];
$get_pass = $_POST["pass"];

write_ini($get_nick, $get_pass, $admin_id, $admin_pass);
log_in($get_nick, $get_pass);
?>