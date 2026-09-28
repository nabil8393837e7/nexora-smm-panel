<?php
define("DB_HOST","YOUR_DB_HOST");
define("DB_NAME","YOUR_DB_NAME");
define("DB_USER","YOUR_DB_USER");
define("DB_PASS","YOUR_DB_PASSWORD");
define("APP_URL","https://YOUR-DOMAIN.example");
define("PROVIDER_API_URL","");
define("PROVIDER_API_KEY",""); // keep secret; never put this in frontend code
if(session_status()!==PHP_SESSION_ACTIVE) session_start();
function db(): PDO {
 static $pdo;
 if(!$pdo) $pdo=new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8mb4",DB_USER,DB_PASS,[
  PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
  PDO::ATTR_EMULATE_PREPARES=>false
 ]);
 return $pdo;
}
function e($v){return htmlspecialchars((string)$v,ENT_QUOTES,"UTF-8");}
function csrf(){if(empty($_SESSION["csrf"]))$_SESSION["csrf"]=bin2hex(random_bytes(32));return $_SESSION["csrf"];}
function check_csrf(){if(!hash_equals($_SESSION["csrf"]??"",$_POST["csrf"]??""))exit("Invalid request.");}
?>