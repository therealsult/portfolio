<?php
$dsn = "mysql:host=localhost;dbname=prvohr71_portfolio_db;charset=utf8mb4";
try {
$connection = new PDO($dsn, 'prvohr71_primary', 'p4CFgSZ@dunUjqp');
} catch (Exception $e) {
  error_log($e->getMessage());
  exit('unable to connect');
}
?>