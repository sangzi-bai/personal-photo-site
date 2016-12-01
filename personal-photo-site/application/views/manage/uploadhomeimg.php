<html>
<head>
<title>首页图片上传</title>
</head>
<body>

<?php echo $error;?>
<p><h1>首页图片上传</h1></p>
<?php echo form_open_multipart('indexhome/upload_index_bigimg');?>
<label for="imgtitle">标题：</label>
<input type="text" name="imgtitle" /><br /><br />
<label for="imgintro">简介：</label>
<textarea type="text" name="imgintro" ></textarea><br /><br />
<label for="imgtype">类型：</label>
<select name="imgtype" >
    <option  value="indeximg">bigimg</option>
    <option  value="indexminimg">minimg</option>
</select><br /><br />
<input type="file" name="userfile" multiple="multiple" size="20" />

<br /><br />

<input type="submit" value="上传" />

</form>
</body>
</html>