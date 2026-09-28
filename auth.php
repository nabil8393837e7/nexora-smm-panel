<?php
require_once __DIR__."/config.php";
function require_login(){if(empty($_SESSION["user_id"])){header("Location: login.php");exit;}}
function require_admin(){require_login();if(($_SESSION["role"]??"")!=="admin"){http_response_code(403);exit("Forbidden");}}
function user(){if(empty($_SESSION["user_id"]))return null;$q=db()->prepare("SELECT * FROM users WHERE id=?");$q->execute([$_SESSION["user_id"]]);return $q->fetch();}
?>