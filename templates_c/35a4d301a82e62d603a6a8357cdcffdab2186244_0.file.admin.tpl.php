<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-13 02:52:28
  from 'C:\xampp\htdocs\web11\templates\tpl\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e44abdcd68b70_55412083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35a4d301a82e62d603a6a8357cdcffdab2186244' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web11\\templates\\tpl\\admin.tpl',
      1 => 1581558597,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e44abdcd68b70_55412083 (Smarty_Internal_Template $_smarty_tpl) {
?><h1 class="text-center mt-2">育將電腦工作室 後台</h1>
<div class="container">
	<div class="row">
		<div class="col-sm-9">

		</div>
		<div class="col-sm-3">

			<div class="card" style="width: 18rem;">
				<div class="card-header">
					管理員
				</div>
				<ul class="list-group list-group-flush">
					<li class="list-group-item">
						<a href="index.php" style="display:block;">首頁</a>
					</li>
					<li class="list-group-item">
						<a href="user.php?op=logout" class="btn-block">登出</a>
					</li>
					<li class="list-group-item">
						<a href="http://localhost/adminer/adminer.php" class="btn-block">資料庫管理</a>
					</li>
					<li class="list-group-item">
						<a href="<?php echo $_smarty_tpl->tpl_vars['op1']->value;?>
" class="btn-block">育將電腦工作室</a>
					</li>
					
				</ul>
			</div>

		</div>
	</div>
</div><?php }
}
