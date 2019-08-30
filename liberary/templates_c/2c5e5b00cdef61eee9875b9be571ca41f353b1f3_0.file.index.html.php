<?php
/* Smarty version 3.1.33, created on 2019-08-30 10:58:57
  from 'C:\Lab\liberary\templates\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d68e551e46534_21079897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c5e5b00cdef61eee9875b9be571ca41f353b1f3' => 
    array (
      0 => 'C:\\Lab\\liberary\\templates\\index.html',
      1 => 1567155411,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d68e551e46534_21079897 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/jquery.toast.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        
        <h2>留言板
           
                <a href="login.php" class="btn btn-md btn-info pull-right"> 
                    <span>登入</span>
                </a>
          
                <a href="index.php?sigout=1" class="btn btn-md btn-danger pull-right"> 
                    <span>登出</span>
                </a>
                <a href="memberpage.php" class="btn btn-md btn-info pull-right">
                    <span>會員頁</span>
                </a>
          
        </h2>

        <table class="table table-hover">
            <h3>HELLO!</h3>
            <a href="create.php" class="btn btn-md btn-success pull-right">
                <span class="glyphicon glyphicon-plus"></span> 新增
            </a>
        
            <thead>
                <tr>
                    <th>編號</th>
                    <th>暱稱</th>
                    <th>標題</th>
                </tr>
            </thead>
            <tbody>
      
                <?php while ($_prefixVariable1 = $_smarty_tpl->tpl_vars['re']->value->fetch()) {
$_smarty_tpl->_assignInScope('row', $_prefixVariable1);?>
                <tr>
                    <td> <?php echo $_smarty_tpl->tpl_vars['row']->value['a_uId'];?>
 </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['row']->value['a_uName'];?>
 </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['row']->value['aTitle'];?>
 </td>
                    <td>
                        <span class="pull-right">   
                        <form method="" action="index.php">
                                    
                            <a href="detailed.php" class="btn btn-xs btn-success">
                                <span class="glyphicon glyphicon-pencil"></span>詳細</a>
                
                                | <a href="edit.php" class="btn btn-xs btn-info">
                                <span class="glyphicon glyphicon-pencil"></span>修改</a> |

                                <button type="submit" id="delete" name="delete" class="btn btn-xs btn-danger">
                                    <input type="hidden" name='Id' value='<?php echo '<?php ';?>echo $row['aId'] <?php echo '?>';?>'>
                                    <span class="glyphicon glyphicon-remove"></span> 刪除
                                </button>
                                
                        </form>
                        
                                
                        </span>
                    </td>
                    <?php }?>

                </tr>
                
            
            </tbody>
        </table>
    </div>
        
</body>
</html>

<?php }
}
