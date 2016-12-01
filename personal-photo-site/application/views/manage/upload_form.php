<html>
<head>
<title>图片上传</title>
</head>
<body>

<?php echo $error;?>

<?php echo form_open_multipart('upload/do_upload');?>
<label for="imgtitle">标题：</label>
<input type="text" name="imgtitle" /><br /><br />
<label for="imgintro">简介：</label>
<textarea type="text" name="imgintro" ></textarea><br /><br />
<label for="imgtype">类型(请输入英文)：</label>
<input type="text" name="imgtype"/><br /><br />
<input type="file" name="userfile" multiple="multiple" size="20" />

<br /><br />

<input type="submit" value="上传" />

</form>
<p><img src="E:/workspace/index/uploads/game/1476628862.png"/></p>
</body>
</html>