<?php
/* Smarty version 3.1.30, created on 2017-10-17 08:59:37
  from "/Users/kazuya/Sites/framework_cardreader/smarty/templates/db_error.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59e5c67965d652_81122836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f18bbdbb9efcfa7b9a9e503c87817099beb2568' => 
    array (
      0 => '/Users/kazuya/Sites/framework_cardreader/smarty/templates/db_error.tpl',
      1 => 1505893666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:error_tmp.tpl' => 1,
  ),
),false)) {
function content_59e5c67965d652_81122836 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_150160377059e5c67965c6a7_96582938', "template_body");
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:error_tmp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "template_body"} */
class Block_150160377059e5c67965c6a7_96582938 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h1>DB ERROR</h1>
<p>申し訳ございません、現在メンテナンス中でございます。しばらくお待ちください。</p>
<hr/>
<?php
}
}
/* {/block "template_body"} */
}
