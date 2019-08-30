<?php
#引用header
require('./header.php');
require('./DB/db.php');

$sql = "select * from article";
$result = $pdo->query($sql);
$result->execute();
//$result->fetchAll(PDO::FETCH_ASSOC);



$smarty->assign('re', $result);




$smarty->display('index.html');

?>