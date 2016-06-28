<?php
/* Smarty version 3.1.29, created on 2016-06-26 14:01:23
  from "E:\wamp64\www\yiban\application\views\qiandao\app\index.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_576fe033562c71_61287253',
  'file_dependency' => 
  array (
    'a7e321b8aecc15962153b1aeaea7a6e6ef5deefd' => 
    array (
      0 => 'E:\\wamp64\\www\\yiban\\application\\views\\qiandao\\app\\index.php',
      1 => 1466949680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576fe033562c71_61287253 ($_smarty_tpl) {
?>


  <article class="jumbotron">
    <header>
      <h1>中南大学易签到</h1>
      <p>\(“▔3▔)/\(“▔3▔)/\(“▔3▔)/</p>
      <a href="./create" class="btn btn-success">创建</a>
    </header>
    <?php if (isset($_smarty_tpl->tpl_vars['events']->value)) {?>
    <section style="margin-top: 20px">
      <table class="table table-bordered">
        <title>历史记录</title>
        <thead>
        <tr>
          <th>id</th>
          <th>名称</th>
          <th>时间</th>
          <th>详情</th>
        </tr>
        </thead>
        <?php
$_from = $_smarty_tpl->tpl_vars['events']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_event_0_saved_item = isset($_smarty_tpl->tpl_vars['event']) ? $_smarty_tpl->tpl_vars['event'] : false;
$_smarty_tpl->tpl_vars['event'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['event']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['event']->value) {
$_smarty_tpl->tpl_vars['event']->_loop = true;
$__foreach_event_0_saved_local_item = $_smarty_tpl->tpl_vars['event'];
?>
        <tbody>
        <tr >
          <td><?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['event']->value['event_name'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['event']->value['created_date'];?>
</td>
          <td><a href="./qiandao/detail/<?php echo $_smarty_tpl->tpl_vars['event']->value['event_id'];?>
">详情</a></td>
        </tr>
        </tbody>
        <?php
$_smarty_tpl->tpl_vars['event'] = $__foreach_event_0_saved_local_item;
}
if ($__foreach_event_0_saved_item) {
$_smarty_tpl->tpl_vars['event'] = $__foreach_event_0_saved_item;
}
?>
      </table>
    </section>
    <?php }?>
  </article>

<?php }
}
