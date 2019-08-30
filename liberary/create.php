<?php
require('./header.php');
require('./DB/db.php');




$smarty->assign('postCreate' , 'postCreate.php');


$smarty->display('create.html');