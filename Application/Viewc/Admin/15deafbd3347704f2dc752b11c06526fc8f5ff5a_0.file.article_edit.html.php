<?php
/* Smarty version 3.1.32, created on 2018-09-28 22:05:54
  from 'F:\PHP Develop\2018\09-28phpblogd4\products1\Application\View\Admin\article_edit.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bae35422fa305_33659971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15deafbd3347704f2dc752b11c06526fc8f5ff5a' => 
    array (
      0 => 'F:\\PHP Develop\\2018\\09-28phpblogd4\\products1\\Application\\View\\Admin\\article_edit.html',
      1 => 1538143546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bae35422fa305_33659971 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title>拼图后台管理-后台管理</title>
<link rel="stylesheet" href="/09-28phpblogd4/products1/Application/View/Admin/css/pintuer.css">
<link rel="stylesheet" href="/09-28phpblogd4/products1/Application/View/Admin/css/admin.css">
<?php echo '<script'; ?>
 charset="utf-8" src="/09-28phpblogd4/products1/Public/Kindeditor/kindeditor-min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 charset="utf-8" src="/09-28phpblogd4/products1/Public/Kindeditor/lang/zh_CN.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    var editor;
    KindEditor.ready(function(K) {
        editor = K.create('textarea[name="content"]');

    });
<?php echo '</script'; ?>
>
</head>

<body>
<div class="admin">
  <div class="tab">
    <div class="tab-head"> <strong>文章管理</strong>
      <ul class="tab-nav">
        <li class="active"><a href="#tab-set">修改文章</a></li>
      </ul>
    </div>
    <div class="tab-body"> <br />
      <div class="tab-panel active" id="tab-set">
        <form method="post" class="form-x" action="">
          <div class="form-group">
            <div class="label">
              <label for="title">文章标题</label>
            </div>
            <div class="field">
              <input type="text" class="input" id="title" name="title" size="50" placeholder="请填写你文章标题的名称" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['art_info']['art_title'];?>
" size="50" />
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="cat_id">所属分类</label>
            </div>
            <div class="field">
              <select class="input" name="cat_id" style="width:20%" id="cat_id">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['cat_list'], 'rows');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['rows']->value['cat_id'];?>
" <?php echo $_smarty_tpl->tpl_vars['rows']->value['cat_id'] == $_smarty_tpl->tpl_vars['data']->value['art_info']['cat_id'] ? 'selected' : '';?>
><?php echo str_repeat('&nbsp;',$_smarty_tpl->tpl_vars['rows']->value['deep']*4);
echo $_smarty_tpl->tpl_vars['rows']->value['cat_name'];?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="content">文章内容</label>
            </div>
            <div class="field">

              <textarea name="content" style="width:800px;height:400px;visibility:hidden;" cols="50" rows="5" class="input" id="content" placeholder="内容"><?php echo $_smarty_tpl->tpl_vars['data']->value['art_info']['art_content'];?>
</textarea>
              <!-- <textarea name="content" cols="50" rows="5" class="input" id="content" placeholder="内容"><?php echo $_smarty_tpl->tpl_vars['data']->value['art_info']['art_content'];?>
</textarea> -->
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="is_top">是否置顶</label>
            </div>
            <div class="field">
              <input type="radio" name="is_top" value="1" checked>是
              <input type="radio" name="is_top" value="0" <?php echo $_smarty_tpl->tpl_vars['data']->value['art_info']['is_top'] == 0 ? 'checked' : '';?>
>否
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="desc">是否公开</label>
            </div>
            <div class="field">
              <input type="radio" name="is_public" value="1" checked>是
              <input type="radio" name="is_public" value="0" <?php echo $_smarty_tpl->tpl_vars['data']->value['art_info']['is_public'] == 0 ? 'checked' : '';?>
>否
            </div>
          </div>
          <div class="form-button">
            <button class="button bg-main" type="submit">提交</button>
          </div>
        </form>
      </div>
      <div class="tab-panel" id="tab-email">邮件设置</div>
      <div class="tab-panel" id="tab-upload">上传设置</div>
      <div class="tab-panel" id="tab-visit">访问限制</div>
    </div>
  </div>
  <p class="text-right text-gray">基于<a class="text-gray" target="_blank" href="#">传智播客</a>构建</p>
</div>
</body>
</html><?php }
}
