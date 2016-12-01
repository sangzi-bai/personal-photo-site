<?php
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
				<h1>Register</h1>
			</div>
			<?= form_open('user/register'); ?>
				<div class="form-group">
					<label for="username">用户名</label>
					<input type="text" class="form-control" id="username" name="username" placeholder="Enter a username">
					<p class="help-block">至少4个字符</p>
					<!--At least 4 characters, letters or numbers only-->
				</div>
				<div class="form-group">
					<label for="email">邮箱</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
					<p class="help-block">请填写正确的邮箱地址</p>
				</div>
				<div class="form-group">
					<label for="password">密码</label>
					<input type="password" class="form-control" id="password" name="password" placeholder="Enter a password">
					<p class="help-block">至少6个字符</p>
				</div>
				<div class="form-group">
					<label for="password_confirm">请确认密码</label>
					<input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="Confirm your password">
					<p class="help-block">确保两次密码输入一样</p>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-default" value="注册">
				</div>
			</form>
		</div>
	</div><!-- .row -->
</div><!-- .container -->