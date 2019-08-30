<?php
/* Smarty version 3.1.33, created on 2019-08-30 03:31:58
  from 'C:\Lab\liberary\templates\text.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d687c8e5b0ab5_26644409',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d6dc3c20acfab917502489ad7d52b57166d7af9' => 
    array (
      0 => 'C:\\Lab\\liberary\\templates\\text.html',
      1 => 1567128713,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d687c8e5b0ab5_26644409 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</head>
<body>
 
<div class="container">
  <h2>Panels with Contextual Classes</h2>
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['test']->value;?>
</div>
      <div class="panel-body"><?php echo $_smarty_tpl->tpl_vars['try']->value;?>
</div>
    </div>

   
  </div>
</div>

</body>
</html>

<?php }
}
