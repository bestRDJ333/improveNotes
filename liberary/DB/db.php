<?php
header("content-type:text/html; charset=utf-8");
$pdo = new pdo("mysql:host=localhost; dbname=message;port=3306" ,"root", "");
$pdo->exec("set names utf8");
