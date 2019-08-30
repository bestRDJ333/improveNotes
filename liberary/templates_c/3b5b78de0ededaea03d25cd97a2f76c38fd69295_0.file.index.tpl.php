<?php
/* Smarty version 3.1.33, created on 2019-08-30 07:41:14
  from 'C:\Lab\liberary\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d68b6fa84fbf5_78892365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b5b78de0ededaea03d25cd97a2f76c38fd69295' => 
    array (
      0 => 'C:\\Lab\\liberary\\templates\\index.tpl',
      1 => 1567128681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:foot.tpl' => 1,
  ),
),false)) {
function content_5d68b6fa84fbf5_78892365 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>大家好，我叫<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
, 歡迎大家閱讀我的smarty學習材料。
<?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
