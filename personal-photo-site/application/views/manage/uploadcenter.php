
<div class="col-md-8 col-xs-12">
    <div class="tab-content">
  <div role="tabpanel" class="tab-pane active" id="home">
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
<label for="imgtypemark">类型标记：</label>
<input type="text" name="imgtypemark"/><br /><br />
<input type="file" name="userfile" multiple="multiple" size="20" />

<br /><br />

<input type="submit" value="上传" />

</form>
</div>
<!--展示页上传-->
  <div role="tabpanel" class="tab-pane" id="picshow"> 
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
      </div>
      <!--图组展示页-->
  <div role="tabpanel" class="tab-pane" id="picgroup"><?php echo $error;?>
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

</form></div>
</div>
</div>