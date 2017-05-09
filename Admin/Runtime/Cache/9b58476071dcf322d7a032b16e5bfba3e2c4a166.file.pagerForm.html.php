<?php /* Smarty version Smarty-3.1.6, created on 2017-04-29 18:11:23
         compiled from "./Admin/Tpl\Public\pagerForm.html" */ ?>
<?php /*%%SmartyHeaderCode:10061590466cb0a6fb1-78512100%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b58476071dcf322d7a032b16e5bfba3e2c4a166' => 
    array (
      0 => './Admin/Tpl\\Public\\pagerForm.html',
      1 => 1492676567,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10061590466cb0a6fb1-78512100',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'currentPage' => 0,
    'numPerPage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_590466cb0d1f4',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590466cb0d1f4')) {function content_590466cb0d1f4($_smarty_tpl) {?><form id="pagerForm" action="__URL__/index" method="post">
	<input type="hidden" name="pageNum" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['currentPage']->value)===null||$tmp==='' ? '1' : $tmp);?>
" />
	<input type="hidden" name="numPerPage" value="<?php echo $_smarty_tpl->tpl_vars['numPerPage']->value;?>
" />
	<input type="hidden" name="_order" value="<?php echo $_REQUEST['_order'];?>
"/>
	<input type="hidden" name="_sort" value="<?php echo $_REQUEST['_sort'];?>
"/>
</form><?php }} ?>