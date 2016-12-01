<!--<html>
<head>
<title>图组上传页</title>
</head>
<body>-->
<div class="col-md-8 col-xs-12">
    <div class="tab-content">
  <div role="tabpanel" class="tab-pane active" id="home">
      <?php echo $error;?>
<p><h1>图组图片上传</h1></p>
<?php echo form_open_multipart('picshow/uploadpicgroup');?>
<label for="imgtitle">标题：</label>
<input type="text" name="imgtitle" /><br /><br />
<label for="imgtype">类型：</label>
<input type="text" name="imgtype" value="picgroup" readOnly="true"/><br /><br />
<label for="imgtypemark">类型标记：</label>
<input type="text" name="imgtypemark"/><br /><br />
<input type="file" name="userfile" multiple="multiple" size="20" />

<br /><br />

<input type="submit" value="上传" />

</form>
</div>
  <div role="tabpanel" class="tab-pane" id="picshow">2</div>
  <div role="tabpanel" class="tab-pane" id="picgroup">3</div>
</div>
<!--<ul class="nav nav-tabs" role="tablist" id="myTab">
  <li role="presentation" class="active"><a href="#home" role="tab" data-toggle="tab">1</a></li>
  <li role="presentation"><a href="#profile" role="tab" data-toggle="tab">3</a></li>
  <li role="presentation"><a href="#messages" role="tab" data-toggle="tab">2</a></li>
  <li role="presentation"><a href="#settings" role="tab" data-toggle="tab">4</a></li>
</ul>

<div class="tab-content">
  <div role="tabpanel" class="tab-pane active" id="home">.2.</div>
  <div role="tabpanel" class="tab-pane" id="profile">.1.</div>
  <div role="tabpanel" class="tab-pane" id="messages">3..</div>
  <div role="tabpanel" class="tab-pane" id="settings">.4</div>
</div>

<script>
  $(function () {
    $('#myTab a:last').tab('show')
  })
  </script>-->
</div>
<!--</body>
</html>-->