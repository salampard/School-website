<div class="col-md-10 col-md-offset-1 marginTop60px marginBottom100px">
	<h3 class="judulAbuAbu alignCenter">Edit Kelas</h3>
	<hr>

	<div class="mb-3">
            <label for="inputFotoGalery" class="form-label">Post Foto</label>
            <input type="hidden" name="oldImage" value="{{ $galery->inputFotoGalery }}">
            @if ($galery->inputFotoGalery)
                <img src="{{ asset('images/' . $galery->inputFotoGalery) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
            @else
                <img class="img-preview img-fluid mb-3 col-sm-5">
            @endif

            <input class="form-control inputLogoKelas @error('inputFotoGalery') is-invalid @enderror" type="file" id="inputFotoGalery" name="inputFotoGalery" onchange="previewImage()">
            @error('inputFotoGalery')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
          @enderror
        </div>

	<?php if($kelas??false) : ?>
	<?= form_open('adminKelas/editKelas',['class'=>'form']); ?>
		<input type="hidden" name="kelas_id" value="<?= $kelas->kelas_id??''; ?>">

		<?= $errors['kelas']??''; ?>
		<input type="text" name="kelas" placeholder="nama kelas" class="form-control" value="<?= $kelas->kelas??''; ?>">
		<?= $errors['url_logo']??''; ?>
		<input type="text" name="url_logo" placeholder="url logo" class="form-control" value="<?= $kelas->logo??''; ?>">

		


		<textarea class="ckeditor" id="ckeditor" name="keterangan"><?= $kelas->keterangan??''; ?></textarea>

		<button type="submit" name="submit" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Simpan</button>
		<a href="<?= base_url('adminKelas'); ?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
	</form>
	<?php endif; ?>
</div>

<script>
function previewImage(){
    const image = document.querySelector('#inputFotoGalery');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'blok';

    const oFReader = new FileReader();

    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
    }
}
</script>