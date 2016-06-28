<?php
/* Smarty version 3.1.29, created on 2016-06-26 11:04:08
  from "E:\wamp64\www\yiban\application\views\qiandao\app\createresult.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_576fb6a8a079a5_63906869',
  'file_dependency' => 
  array (
    '4956bc14b5f21f23a9149866cdf3acbbac09b76f' => 
    array (
      0 => 'E:\\wamp64\\www\\yiban\\application\\views\\qiandao\\app\\createresult.php',
      1 => 1466939043,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576fb6a8a079a5_63906869 ($_smarty_tpl) {
?>

  <article class="jumbotron">
    <h1>创建成功</h1>
    <p>复制此二维码,其他人使用易班客户端扫一扫即可签到.</p>
    <img src="../../<?php echo $_smarty_tpl->tpl_vars['qrcode']->value;?>
"/>
    <a href="../../<?php echo $_smarty_tpl->tpl_vars['qrcode']->value;?>
" download="<?php echo $_smarty_tpl->tpl_vars['qrcode']->value;?>
">点此下载</a>
  </article>
<?php }
}
