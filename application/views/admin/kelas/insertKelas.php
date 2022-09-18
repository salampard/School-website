<div class="col-md-10 col-md-offset-1 marginTop60px marginBottom100px">
	<h3 class="judulAbuAbu alignCenter">Insert Kelas</h3>
	<hr>
	<?= form_open('adminKelas/insertKelas',['class'=>'form']); ?>

		<?= $errors['kelas']??''; ?>
		<input type="text" name="kelas" placeholder="nama kelas" class="form-control" value="<?= $old_value['kelas']??''; ?>">
		<?= $errors['url_logo']??''; ?>
		<input type="text" name="url_logo" placeholder="url logo" class="form-control" value="<?= $old_value['url_logo']??''; ?>">
		
		<textarea class="ckeditor" id="ckeditor" name="keterangan"><?= $old_value['keterangan']??''; ?></textarea>

		<button type="submit" name="submit" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Simpan</button>
		<a href="<?= base_url('adminKelas'); ?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
	</form>
</div>