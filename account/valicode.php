<?php
include_once '../mod/jpgraph_antispam-digits.php';
//ini_set("global_register", "on");
$conf = parse_ini_file("../mod/config_itsrcs.php.ini",true);
session_save_path($conf['path']['session_save_path']);
session_start();
$spam = new AntiSpam();
$_SESSION['codex'] = $spam->Rand(5);
$spam->Stroke();
?>