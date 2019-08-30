<?php
/* Smarty version 3.1.33, created on 2019-08-30 11:55:54
  from 'C:\Lab\liberary\templates\edit.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d68f2aa23ef68_10096030',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40e0edbfab001c6d3ddf9688192f1b201da77732' => 
    array (
      0 => 'C:\\Lab\\liberary\\templates\\edit.html',
      1 => 1567158936,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d68f2aa23ef68_10096030 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">

            <form method="post" action= "<?php echo $_smarty_tpl->tpl_vars['postEdit']->value;?>
">
                    <fieldset>
                    <legend>修改</legend>
                    
                    <div class="form-group">
                      <label class="col-md-4 control-label">Name:</label>  
                      <div class="col-md-4">
                      <input id="Name" name="Name" type="text" 
                              pattern="[a-zA-Z0-9]" title="輸入錯誤" 
                              value="testName" readonly
                              class="form-control input-md">
                      </div>
                    </div>
                    
        
                    <div class="form-group">
                      <label class="col-md-4 control-label">Title:</label>  
                      <div class="col-md-4">
                      <input id="Title" name="Title" type="text" 
                              title="輸入錯誤"
                              maxlength="20"
                              class="form-control input-md">
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="col-md-4 control-label">Mesg:</label>  
                      <div class="col-md-4">
                      <input id="Mesg" name="Mesg" type="text"
                              title="輸入錯誤"
                              maxlength ="50"
                              class="form-control input-md">
                      </div>
                    </div>
                   
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="okOrCancel"></label>
                      <div class="col-md-8">
                        <button type="submit" id="okOrCancel" name="Okbtn" class="btn btn-success">OK</button>
                        
                        <a href="../index.php">
                            <span id="okOrCancel" name="Cancelbtn" class="btn btn-md btn-danger">Cancel</span>
                        </a>
                        
                          &nbsp;
                          &nbsp;
                        
                      </div>
                    </div>
                    
                    </fieldset>
                    </form>
                    


</div>
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"><?php echo '</script'; ?>
>
  </body>
</body>
</html><?php }
}
