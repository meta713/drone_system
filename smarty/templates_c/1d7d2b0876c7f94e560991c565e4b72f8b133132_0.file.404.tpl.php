<?php
/* Smarty version 3.1.30, created on 2017-10-17 18:17:27
  from "/Users/kazuya/Sites/framework_cardreader/smarty/templates/404.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59e5caa78c89f1_10846493',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d7d2b0876c7f94e560991c565e4b72f8b133132' => 
    array (
      0 => '/Users/kazuya/Sites/framework_cardreader/smarty/templates/404.tpl',
      1 => 1505893666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:error_tmp.tpl' => 1,
  ),
),false)) {
function content_59e5caa78c89f1_10846493 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_29283890159e5caa78c7899_22710262', "template_body");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:error_tmp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "template_body"} */
class Block_29283890159e5caa78c7899_22710262 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h1>404 Not Found</h1>
<p>The requested URL <?php echo $_SERVER['REQUEST_URI'];?>
 was not found on this server.</p>
<hr/>
<?php
}
}
/* {/block "template_body"} */
}
