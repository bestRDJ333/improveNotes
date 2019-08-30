<?php
require('./header.php');
require('./DB/db.php');

$smarty->assign('postEdit', 'postEdit.php');

$smarty->display('edit.html');