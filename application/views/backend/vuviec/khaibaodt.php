<form action="" method="POST">
	<p>
		<label>Số đối tượng</label>
		<input class="text-input small-input" type="text" id="medium-input" name="sodt" placeholder="Số đối tượng" value="<?php echo set_value('sodt'); ?>" />
		<?php echo form_error('sodt','<span class="input-notification error png_bg">','</span>'); ?>
	</p>
	<p>
		<input class="button" type="submit" name="submit" value="Nhập dữ liệu" />
	</p>
</form>