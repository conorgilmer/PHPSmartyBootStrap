<?php /* Smarty version Smarty-3.1.15, created on 2013-10-09 21:40:07
         compiled from "application/views/smarty/templates/master.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10231857915255bf27efedf7-59788507%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b51924d71e94a9a8b53822c6b35fc769f98c52c' => 
    array (
      0 => 'application/views/smarty/templates/master.tpl',
      1 => 1381348612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10231857915255bf27efedf7-59788507',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5255bf28035ad4_09940592',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5255bf28035ad4_09940592')) {function content_5255bf28035ad4_09940592($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("jumbotron.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['page']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
