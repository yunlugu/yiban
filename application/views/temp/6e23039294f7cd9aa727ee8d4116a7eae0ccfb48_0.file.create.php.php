<?php
/* Smarty version 3.1.29, created on 2016-06-26 10:57:54
  from "E:\wamp64\www\yiban\application\views\qiandao\app\create.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_576fb53230db36_50550963',
  'file_dependency' => 
  array (
    '6e23039294f7cd9aa727ee8d4116a7eae0ccfb48' => 
    array (
      0 => 'E:\\wamp64\\www\\yiban\\application\\views\\qiandao\\app\\create.php',
      1 => 1466933844,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576fb53230db36_50550963 ($_smarty_tpl) {
?>


  <article class="jumbotron">
    <h1>创建新的签到项目</h1>
    <form method="post" action="./create">
      <div class="form-group">
        <label for="exampleInputEmail1">活动名称</label>
        <input name="event_name" type="text" class="form-control" id="event_name" placeholder="名称">
      </div>

      <button type="submit" class="btn btn-default">确认创建</button>
    </form>
  </article>

<?php }
}
