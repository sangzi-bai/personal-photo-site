<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
	<div class="row">
		<?php if (validation_errors()) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= validation_errors() ?>
				</div>
			</div>
		<?php endif; ?>
		<?php if (isset($error)) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= $error ?>
				</div>
			</div>
		<?php endif; ?>
		<div class="col-md-12">
			<div class="page-header">
				<h1>用户注册</h1>
			</div>
			<?= form_open('user/register') ?>
				<div class="form-group">
					<label for="username">用户名</label>
					<input type="text" class="form-control" id="username" name="username" placeholder="请输入一个用户名">
					<p class="help-block">至少4个字符</p>
				</div>
				<div class="form-group">
					<label for="email">邮箱</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="请输入邮箱地址">
					<p class="help-block">请填写正确的邮箱地址</p>
				</div>
				<div class="form-group">
					<label for="password">密码</label>
					<input type="password" class="form-control" id="password" name="password" placeholder="请输入密码">
					<p class="help-block">至少6个字符</p>
				</div>
				<div class="form-group">
					<label for="password_confirm">请再次输入密码</label>
					<input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="请确认密码">
					<p class="help-block">确保两次密码输入一样</p>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-default" value="注册">
				</div>
			</form>
		</div>
	</div><!-- .row -->
</div><!-- .container -->