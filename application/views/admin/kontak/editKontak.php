<div class="col-md-6 col-md-offset-3 marginTop60px">
	<h3 class="judulAbuAbu alignCenter">Edit kontak</h3>
	<hr>
	<?php if($kontak->kontak_id??false) : ?>
	<?= form_open('adminKontak/editKontak',['class'=>'form']); ?>
		<?= $errors['no_telp']??''; ?>		
		<div class="input-group">
			<div class="input-group-addon"><span class="glyphicon glyphicon-phone-alt"></span></div>
			<input type="text" name="no_telp" placeholder="no telp" class="form-control" value="<?= $kontak->no_telp??''; ?>">
		</div>
		<?= $errors['email']??''; ?>
		<div class="input-group">
			<div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
			<input type="text" name="email" placeholder="email" class="form-control" value="<?= $kontak->email??''; ?>">
		</div>
		<?= $errors['facebook']??''; ?>
		<div class="input-group">
			<div class="input-group-addon"><span class="fi fi-social-facebook fi-lg"></span></div>
			<input type="text" name="facebook" placeholder="facebook" class="form-control" value="<?= $kontak->facebook??''; ?>">
		</div>
		<?= $errors['alamat']??''; ?>
		<div class="input-group">
			<div class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span></div>
			<textarea type="text" name="alamat" placeholder="alamat" class="form-control"><?= $kontak->alamat??''; ?></textarea>
		</div>

		<button type="submit" name="submit" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Simpan</button>
		<a href="<?= base_url('adminKontak'); ?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
	</form>
	<?php endif; ?>
</div>