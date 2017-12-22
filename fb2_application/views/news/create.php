<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>

<label for="title">标题</label>
<input type="input" name="title" /><br />

<label for="text">内容</label>
<textarea name="text"></textarea><br />

<input type="submit" name="submit" value="添加" />

</form>