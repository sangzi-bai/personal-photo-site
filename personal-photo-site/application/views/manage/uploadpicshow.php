<!--<html>
<head>
<title>展示页图片上传</title>
</head>
<body>-->
<!--<div class="col-md-8 col-xs-6">-->
<?php echo $error;?>
<p><h1>展示页图片上传</h1></p>
<?php echo form_open_multipart('picshow/uploadpicshow');?>
<label for="imgtitle">标题：</label>
<input type="text" name="imgtitle"/><br /><br />
<label for="imgintro">简介：</label>
<textarea type="text" name="imgintro" ></textarea><br /><br />
<label for="imgtype">类型：</label>
<input type="text" name="imgtype" value="picshowindex" readOnly="true"/><br /><br />
<label for="imgtypemark">类型标记：</label>
<input type="text" name="imgtypemark"/><br /><br />
<input type="file" name="userfile" multiple="multiple" size="20" />

<br /><br />

<input type="submit" value="上传" />

</form>
<!--</div>-->
<!--</body>
</html>-->