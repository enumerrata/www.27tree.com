<?php /* Smarty version Smarty-3.1.12, created on 2013-03-03 23:42:12
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:658751336e4e543a73-96322879%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1362325331,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '658751336e4e543a73-96322879',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51336e4e544946_94277861',
  'variables' => 
  array (
    'PATH' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51336e4e544946_94277861')) {function content_51336e4e544946_94277861($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title></title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link rel="stylesheet" type="text/css" href="/core.css" />
    </head>
    <body>
        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['PATH']->value['nav_path'];?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ($_tmp1, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        
        
    </body>
</html><?php }} ?>