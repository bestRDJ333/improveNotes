<?php
#全部都先引用 header.php
#
require './libs/Smarty.class.php';
$smarty = new Smarty;
$smarty->left_delimiter = '{{';
$smarty->right_delimiter = '}}';


?>