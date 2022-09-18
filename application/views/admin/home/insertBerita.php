<div class="col-md-10 col-md-offset-1 nopadding-all marginTop60px marginBottom50px">
	<h3 class="judulAbuAbu alignCenter">Insert Berita</h3>
	<hr>
	<?= form_open('adminHome/insertBerita',['class'=>'form']); ?>
		<?= $errors['judulBesar']??''; ?>
		<input type="text" name="judulBesar" placeholder="judul besar" class="form-control" value="<?= $old_value['judulBesar']??''; ?>">

		<?= $errors['judulKecil']??''; ?>
		<input type="text" name="judulKecil" placeholder="judul kecil" class="form-control" value="<?= $old_value['judulKecil']??''; ?>">

		<?= $errors['urlImgUtama']??''; ?>
		<input type="text" name="urlImgUtama" placeholder="url img utama" class="form-control" value="<?= $old_value['urlImgUtama']??''; ?>">


		<div class="form-group row">
            <label for="inputGambarBerita" class="col-sm-2 col-form-label">Gambar Berita</label>
            <div class="col-sm-2">
                <img src="<?= base_url('assets/img/GambarBerita/default.jpg'); ?>" class="img-thumbnail img-preview">
            </div>
            <div class="col-sm-8">
                <div class="input-group">
                    <input type="file" class="custom-file-input form-control" id="inputGambarBerita" name="inputGambarBerita" onchange="preview_image('#inputGambarBerita')">
                    
                    <label for="inputGambarBerita" class="custom-file-label input-group-text" for="inputGambarBerita">Pilih Foto</label>
                </div>
            </div>
        </div>


		<?= $errors['isi']??''; ?>
		<textarea class="ckeditor" id="ckeditor" name="isi"><?= $old_value['isi']??''; ?></textarea>

		<button type="submit" name="submit" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Simpan</button>
		<a href="<?= base_url('adminHome'); ?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
	</form>
</div>

<script>
    function preview_image($data) {
	const logo = document.querySelector($data);
	const logoLabel = document.querySelector('.custom-file-label');
	const imgPreview = document.querySelector('.img-preview')

	logoLabel.textContent = logo.files[0].name;

	const logoSampul = new FileReader();
	logoSampul.readAsDataURL(sampul.files[0]);

	logoSampul.onload = function(e) {
		imgPreview.src = e.target.result;
	}
}
</script>